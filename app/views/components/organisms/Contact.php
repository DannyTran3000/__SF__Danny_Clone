<?php
// Decode JSON customization data into a PHP object
$content = json_decode($contact['content']);
?>

<section id="contact-me" class="contact">
  <div class="contact__upper">
    <div class="contact__upper-container">
      <svg class="contact__double-quotes" xmlns="http://www.w3.org/2000/svg" width="678" height="139"
        viewBox="0 0 678 139" fill="none">
        <g opacity="0.1" clip-path="url(#clip0_3_429)">
          <path
            d="M20.2634 0C6.7 8.66097 0 17.6488 0 26.9634C0 33.6634 4.90244 39.0561 11.2756 39.0561C17.1585 39.0561 21.8976 34.6439 21.8976 28.9244C21.8976 23.6951 17.9756 19.4464 12.9098 19.4464H12.2561C12.4195 18.9561 12.7463 18.4659 13.0732 17.9756C14.7073 15.6878 18.7927 12.0927 25.1659 7.02683L20.2634 0ZM50.822 19.4464C50.9854 18.9561 51.3122 18.4659 51.639 17.9756C53.2732 15.6878 57.3586 12.0927 63.7317 7.02683L58.8293 0C45.2659 8.66097 38.5659 17.6488 38.5659 26.9634C38.5659 33.6634 43.4683 39.0561 49.8415 39.0561C55.7244 39.0561 60.4634 34.6439 60.4634 28.9244C60.4634 23.6951 56.5415 19.4464 51.4756 19.4464H50.822Z"
            fill="#404040" />
          <path
            d="M641.468 138.056C655.032 129.395 661.732 120.407 661.732 111.093C661.732 104.393 656.829 99 650.456 99C644.573 99 639.834 103.412 639.834 109.132C639.834 114.361 643.756 118.61 648.822 118.61H649.476C649.312 119.1 648.985 119.59 648.659 120.081C647.024 122.368 642.939 125.963 636.566 131.029L641.468 138.056ZM610.91 118.61C610.746 119.1 610.419 119.59 610.093 120.081C608.458 122.368 604.373 125.963 598 131.029L602.902 138.056C616.466 129.395 623.166 120.407 623.166 111.093C623.166 104.393 618.263 99 611.89 99C606.007 99 601.268 103.412 601.268 109.132C601.268 114.361 605.19 118.61 610.256 118.61H610.91Z"
            fill="#404040" />
        </g>
        <defs>
          <clipPath id="clip0_3_429">
            <rect width="677.732" height="138.056" fill="white" />
          </clipPath>
        </defs>
      </svg>
      <p class="contact__quote-content">
        <?php echo $content->quote->content; ?>
      </p>
      <h5 class="contact__quote-author">-
        <?php echo $content->quote->author; ?>
      </h5>
    </div>
  </div>
  <div id="contact" class="contact__under">
    <div class="contact__under-banner">
      <img src="/assets/images/contact.png" alt="Danny Contact" loading="lazy">
    </div>
    <div class="contact__under-form">
      <h4 class="contact__sub-heading">
        <?php echo $content->sub_heading; ?>
      </h4>
      <h2 class="contact__heading">
        <?php echo $content->heading; ?>
      </h2>
      <p class="contact__description">
        <?php echo $content->description; ?>
      </p>"
      <form id="contact__form" onsubmit="ContactForm__onSubmit(); return false;">
        <?php
        include_view(
          ROOT_PATH . 'views/components/molecules/Input.php',
          [
            'attr' => [
              'name' => 'name',
              'placeholder' => 'John Doe',
              'required' => 'true'
            ],
            'container_attr' => ['class' => 'contact__input'],
            'label_props' => ['children' => 'Name'],
          ]
        );
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
            'label_props' => ['children' => 'Email Address']
          ]
        );
        include_view(
          ROOT_PATH . 'views/components/molecules/Input.php',
          [
            'attr' => [
              'name' => 'message',
              'placeholder' => 'What is the issue?',
              'required' => 'true',
              'type' => 'textarea'
            ],
            'container_attr' => ['class' => 'contact__input'],
            'label_props' => ['children' => 'Message']
          ]
        );
        include_view(
          ROOT_PATH . 'views/components/atoms/Button.php',
          [
            'attr' => ['type' => 'submit'],
            'props' => [
              'size' => 'lg',
              'children' => 'Submit',
            ]
          ]
        );
        ?>
      </form>
      <p class="contact__joke">
        <?php echo $content->joke; ?>
      </p>
      <div class="contact__validation"></div>
    </div>
  </div>
</section>