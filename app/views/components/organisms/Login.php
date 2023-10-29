<section id="login" class="contact" style="min-height: calc(100vh - 80px); padding-top: 100px">
  <div class="contact__under">
    <div class="contact__under-banner">
      <img src="/assets/images/contact.png" alt="Danny Contact" loading="lazy">
    </div>
    <div class="contact__under-form">
      <h4 class="contact__sub-heading">
        Looks like you need some help!!!
      </h4>
      <h2 class="contact__heading">
        Sign In!
      </h2>
      <p class="contact__description">
        I usually respond within an hour, but developers do sleep three to six hours a night, so it might take a bit
        longer. Thank you and I am looking to hearing from you.
      </p>
      <form id="login__form" onsubmit="LoginForm__onSubmit(); return false;">
        <?php
        include_view(
          ROOT_PATH . 'views/components/molecules/Input.php',
          [
            'attr' => [
              'name' => 'email',
              'placeholder' => 'Example@mail.com',
              'required' => 'true',
              'type' => 'email',
              'onchange' => 'ContactForm__resetValidation()'
            ],
            'container_attr' => ['class' => 'contact__input'],
            'label_props' => ['children' => 'Email']
          ]
        );
        include_view(
          ROOT_PATH . 'views/components/molecules/Input.php',
          [
            'attr' => [
              'name' => 'password',
              'placeholder' => '********',
              'required' => 'true',
              'type' => 'password'
            ],
            'container_attr' => ['class' => 'contact__input'],
            'label_props' => ['children' => 'Password'],
          ]
        );
        include_view(
          ROOT_PATH . 'views/components/atoms/Button.php',
          [
            'attr' => ['type' => 'submit'],
            'props' => [
              'size' => 'lg',
              'children' => 'Login',
            ]
          ]
        );
        ?>
      </form>
      <p class="contact__joke">
        By submitting this form, you acknowledge receipt of the Privacy and policy.
      </p>
      <div class="contact__validation"></div>
    </div>
  </div>
</section>