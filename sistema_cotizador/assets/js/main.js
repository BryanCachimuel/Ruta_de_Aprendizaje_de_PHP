$("document").ready(() => {
  
  function notify(content, type = 'success'){
    let wrapper = $('.wrapper_notifications'),
    id = Math.floor((Math.random * 500) * 500 +1),
    notification = '<div class="alert alert-'+type+'" id="noty_'+id+'">'+content+'</div>',
    time = 5000;

    /* Insertar en el contenedor la notificación */
    wrapper.append(notification);

    /* Timer para ocultar las notificaciones */
    setTimeout(function(){
      $('#noty_'+id).remove();
    }, time);

    return true;
  }
  
  /* Cargar contenido de la cotización */
  function get_quote() {
    let wrapper = $(".wrapper_quote");
    action = "get_quote_res";
    name = $('#nombre');
    company = $('#empresa');
    email = $('#email');

    $.ajax({
      url: "ajax.php",
      type: "get",
      cache: false,
      dataType: "json",
      data: { action },
      beforeSend: function () {
        wrapper.waiMe();
      },
    })
      .done((res) => {
        if(res.status === 200){
            name.val(res.data.quote.name);
            company.val(res.data.quote.company);
            email.val(res.data.quote.email);
            wrapper.html(res.data.html);
        }else{
          name.val('');
          company.val('');
          email.val('');
            wrapper.html(res.msg);
        }
      })
      .fail((err) => {
        wrapper.html('Ocurrio un error, recarga la p{agina...');
      }).always(() => {
        wrapper.waiMe('hide');
      });
  }

  get_quote();

  /* Función para agregar un concept a la cotización */
  $('#add_to_quote').on('submit', add_to_quote);
  function add_to_quote(e){
    e.preventDefault();

    let form = $('#add_to_quote'),
    action = 'add_to_quote',
    data = new FormData(form.get(0)),
    errors = 0;

    // agregar la acción al objeto data
    data.append('action', action);

    // validar el concepto
    let concepto = $('#concepto').val(),
    precio = parseFloat($('#precio_unitario').val());

    if(concepto.length < 5){
      notify('Ingresa un concepto valido por favor. ', 'danger');
      errors++;
    }

    // validar el precio
    if(precio < 10){
      notify('Por favor ingresa un precio mayor a $10.00','danger');
      errors++;
    }

    if(errors > 0){
      notify('Completa el formulario. ', 'danger');
      return false;
    }

    $.ajax({
      url: 'ajax.php',
      type: 'POST',
      dataType: 'json',
      cache: false,
      processData: false,
      contentType: false,
      data: data,
      beforeSend: () => {
        form.waiMe();
      }
    }).done(res => {
      if(res.status === 201){
        notify(res.msg);
        form.trigger('reset');
        get_quote();
      }else{
        notify(res.msg, 'danger');
      }
    }).fail(err => {
      notify('Hubo un problema con la petición, intenta de nuevo. ', 'danger');
      form.trigger('reset')
    }).always(() => {
      form.waiMe('hide');
    })
  }
});
