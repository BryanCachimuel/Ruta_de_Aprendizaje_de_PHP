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

  // Función para reiniciar la cotización
  $('.restart_quote').on('click', restart_quote);
  function restart_quote(e){
    e.preventDefault();
    let button = $(this),
    action = 'restart_quote',
    dowload = $('#download_quote'),
    send = $('#send_quote'),
    generate = $('#generate_quote'),
    default_text = 'Generar Cotización';

    if(!confirm('¿Estás Seguro?')) return false;

    $.ajax({
      url : 'ajax.php',
      type : 'post',
      dataType: 'json',
      data : {action}
    }).done(res => {
      if(res.status === 200){
        dowload.fadeOut();
        dowload.attr('href','');
        send.fadeOut();
        send.attr('data-number');
        generate.html(default_text);
        notify(res.msg);
        get_quote();
      }else{
        notify(res.msg, 'danger');
      }
    }).fail(err => {
      notify('Hubo un problema con la petición. ' + 'danger');
    }).always(() => {

    });
  }

  // función para borrar un concepto
  $('body').on('click','.delete_concept', delete_concept);
  function delete_concept(e){
    e.preventDefault();

    let button = $(this),
    id = button.data('id'),
    action = 'delete_concept';

    if(!confirm('¿Estás seguro?')) return false;

    // Petición
    $.ajax({
      url : 'ajax.php',
      type : 'post',
      dataType : {action, id},
      beforeSend: () => {
        $('body').waiMe();
      }
    }).done(res => {
      if(res.status === 200){
        notify(res.msg);
        get_quote();
      }else{
        notify(res.msg, 'danger')
      }
    }).fail(err => {
      notify('Hubo un problema con la petición.', 'danger');
    }).always(() => {
      $('body').waiMe('hide');
    });
  }

  // Función cargar un solo concepto
  $('body').on('click', '.edit_concept', edit_concept);
  function edit_concept(e){
    e.preventDefault();

    let button = $(this),
    id = button.data('id'),
    action = 'edit_concept',
    wrapper_update_concept = $('.wrapper_update_concept'),
    form_update_concept = $('#save_concept')

    // Petición
    $.ajax({
      url : 'ajax.php',
      type : 'post',
      dataType: 'json',
      data : {action, id},
      beforeSend: () => {
        $('body').waiMe();
      }
    }).done(res => {
      if(res.status === 200){
        $('#id_concepto', form_update_concept).val(res.data.id);
        $('#concepto', form_update_concept).val(res.data.concepto);
        $('#tipo option[value="'+res.data.type+'"]', form_update_concept).attr('selected', true);
        $('#cantidad', form_update_concept).val(res.data.quamtity);
        $('#precio_unitario', form_update_concept).val(res.data.price);
        wrapper_update_concept.fadeIn();
        notify(res.msg);
      }else{
        notify(res.msg, 'danger');
      }
    }).fail(err => {
      notify('Hubo un problema con la petición', 'danger');
    }).always(() => {
      $('body').waiMe('hide');
    });
  }

  // Función guardar cambios de concepto editado
  $('#save_concept').on('submit', save_concept);
  function save_concept(e){
    e.preventDefault();
    
    let form = $('#save_concept'),
    action = 'save_concept',
    data = new FormData(form.get(0)),
    wrapper_update_concept = $('.wrapper_update_concept'),
    errors = 0;

    // Agregar la acción al objeto data
    data.append('action', action);

    // Validar el concepto
    let concepto = $('#concepto', form).val(),
    precio = parseFloat($('#precio_unitario', form).val());

    if(concepto.length < 5){
      notify('Ingresa un Concepto válido por favor.', 'danger');
      errors++;
    }

    // Validar el precio
    if(precio < 10){
      notify('Por favor ingresa un precio mayor a $10.00','danger');
      errors++;
    }
    if(errors > 0){
      notify('Completa el formulario','danger');
      return false;
    }

    $.ajax({
      url : 'ajax.php',
      type : 'POST',
      dataType : 'json',
      cache : false,
      processData : false,
      contentType : false,
      data : data,
      beforeSend: () => {
        form.waiMe();
      } 
    }).done(res => {
      if(res.status === 200){
        wrapper_update_concept.fadeOut();
        form.trigger('reset'); 
        notify(res.msg);
        get_quote();
      }else{
        notify(res.msg, 'danger');
      }
    }).fail(err =>{
      notify('Hubo un problema con la petición, intenta de nuevo','danger');
      wrapper_update_concept.fadeOut();
      form.trigger('reset');
    }).always(() => {
      form.waiMe('hide');
    }); 
  }

  // Enviar por correo electronico
  $('#cancel_edit').on('click', (e) => {
    e.preventDefault();

    let button = $(this),
    wrapper = $('.wrapper_update_concept'),
    form = $('#save_concept');

    wrapper.fadeOut();
    form.trigger('reset');
  });

  // Función para Generar la cotización
  $('#generate_quote').on('click', generate_quote)
  function generate_quote(e){
    e.preventDefault();

    let button = $(this),
    default_text = button.html(), // Generar
    new_text = 'Volver a Generar',
    dowload = $('#download_quote'),
    send = $('#send_quote'),
    nombre = $('#nombre').val(),
    empresa = $('#empresa').val(),
    email = $('#email').val(),
    action = 'generate_quote',
    errors = 0

    // Validando la acción
    if(!confirm('¿Estás seguro?')) return false;

    // Validando la información
    if(nombre.length < 5){
      notify('Ingresa un nombre para el cliente por favor','danger');
      errors++;
    }
    if(empresa.length < 5){
      notify('Ingresa una empresa válida por favor','danger');
      errors++;
    }
    if(email.length < 5){
      notify('Ingrese una dirección de correo válida por favor','danger');
      errors++;
    }
    if(errors > 0){
      return false;
    }

    // Petición
    $.ajax({
      url : 'ajax.php',
      type : 'POST',
      dataType : 'json',
      cache : false,
      data : {action, nombre, empresa, email},
      beforeSend: () => {
        $('body').waiMe();
        button.html('Generando...')
      }
    }).done(res => {
      if(res.status === 200){
        notify(res.msg);
        dowload.attr('href', res.data.url);
        dowload.fadeIn();
        send.attr('data-number', res.data.number);
        send.fadeIn();
        button.html(new_text);
      }else{
        notify(res.msg, 'danger');
        dowload.attr('href', '');
        dowload.fadeOut();
        send.attr('data-number', '');
        send.fadeOut();
        button.html('Reintentar');
      }
    }).fail(err => {
      notify('Hubo un problema con la petición, intenta de nuevo','danger');
      button.html(default_text);
    }).always(() => {
      $('body').waiMe('hide');
    });
  } 
});

// Enviar por correo electrónico
$('#send_quote').on('click', send_quote);
function send_quote(e){
  e.preventDefault();

  let button = $(this),
  default_text = button.html(),
  next_text = button.data('number'),
  action = 'send_quote';

  // Validando la acción
  if(!confirm('¿Estás Seguro?')) return false;

  if(number === ''){
    notify('El folio de cotización no es válido','danger');
    return false;
  }

  // Petición
  $.ajax({
    url : 'ajax.php',
    type: 'POST',
    dataType : 'json',
    cache : false,
    data : {action, number},
    beforeSend: () => {
      $('body').waiMe();
      button.html('Enviado...')
    }
  }).done(res => {
    if(res.status === 200){
      notify(res.msg);
      button.html(new_text)
    }else{
      notify(res.msg, 'danger');
      button.html('Reintentar');
    }
  }).fail(err => {
    notify('Hubo un problema con la petición, intenta de nuevo','danger');
    button.html(default_text);
  }).always(() => {
    $('body').waiMe('hide');
  });
}
