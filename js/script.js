// JavaScript Document
  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
  	           regexp: {
                        regexp: /^[a-z\s]+$/i,
                        message: 'Por favor ingrese solo letras'
                    },
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Por Favor ingrese un Nombre Con más de 2 letras'
                    }
                }
            },
             usuario: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Por favor ingrese el nombre de Usuario con el que se cadastró'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor ingrese un e-mail válido'
                    },
                    emailAddress: {
                        message: 'Por favor suministre un e-mail correcto'
                    }
                }
            },
            edad: {
                validators: {
		
                    notEmpty: {
                        message: 'Por favor ingrese su Edad, que debe ser mayor a 10 años'
                    }
                }
            }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

