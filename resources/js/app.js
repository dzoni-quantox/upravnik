/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


(function ($) {
  $(function () {

      var addFormGroup = function (event) {
          event.preventDefault();

          var $formGroup = $(this).closest('.form-group');
          var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
          var $formGroupClone = $formGroup.clone();

          $(this)
              .toggleClass('btn-default btn-add btn-danger btn-remove')
              .html('–');

          $formGroupClone.find('input').val('');
          $formGroupClone.insertAfter($formGroup);

          var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
          if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
              $lastFormGroupLast.find('.btn-add').attr('disabled', true);
          }
      };

      var removeFormGroup = function (event) {
          event.preventDefault();

          var $formGroup = $(this).closest('.form-group');
          var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

          var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
          if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
              $lastFormGroupLast.find('.btn-add').attr('disabled', false);
          }

          $formGroup.remove();
      };

      var countFormGroup = function ($form) {
          return $form.find('.form-group').length;
      };

      $(document).on('click', '.btn-add', addFormGroup);
      $(document).on('click', '.btn-remove', removeFormGroup);

  });
})(jQuery);

var ajaxUrl = $("#url").val();

$(document).on('keyup', '.uniqe-field', function(){
    $this = $(this)[0];
    $field = $this["name"];    
    $inputs = $this.closest('form').getElementsByTagName('input');
    $arrInputs = Array.prototype.slice.call( $inputs )
    $subnitBtn = $this.closest('form').getElementsByClassName('submit-form')[0];
    $errorMsgHolder = $this.closest('form').getElementsByClassName($field+'-err-msg')[0];    
    $.ajax({
      url: ajaxUrl,
      method:'POST',
      data: {
        [$field]: $(this).val(),
        field: $field
      },
      dataType:'json',
      success:function(data) {
        $this.classList.remove("error"); 
        $errorMsgHolder.innerHTML = "";
        $errorMsgHolder.classList.remove('show-error')

        $someArray = [];      
        $arrInputs.forEach(function($data){
          $someArray.push($data.classList.contains('error'))
        }) 
        $check = $someArray.includes(true)
        if($check != true){
          $subnitBtn.classList.remove("disabled")
        }
      },
      error:function(data) {
        $errorMsg = data.responseJSON.errors[$field][0];

        if (data.status != 200){      
          $errorMsgHolder.innerHTML = $errorMsg;
          $errorMsgHolder.classList.add('show-error')

          $this.classList.add("error");
          $subnitBtn.classList.add("disabled")
        } 
        else {
          $this.classList.remove("error"); 
          $errorMsgHolder.innerHTML = "";
          $errorMsgHolder.classList.remove('show-error')

          $someArray = [];      
          $arrInputs.forEach(function($data){
            $someArray.push($data.classList.contains('error'))
          }) 
          $check = $someArray.includes(true)
          if($check != true){
            $subnitBtn.classList.remove("disabled")
          }
        }
        
      }

    })
});

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

var deleteLinks = document.querySelectorAll('.js-delete');

for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
        event.preventDefault();

        var choice = confirm(this.getAttribute('data-confirm'));

        if (choice) {
            window.location.href = this.getAttribute('href');
        }
    });
}