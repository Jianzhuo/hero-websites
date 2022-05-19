<div class="contact-form">
  <p>If you have any questions regarding our products or just a general enquiry.<br>Please do not hesitate to contact us using the form below.</p>
  <form id="contact-form">
    <input type="hidden" name="action" value="send_contact">
    <section class="contact-form">
      <div class="form-group">
        <div class="contact-field">
          <input name="name" type="text" placeholder="Name"
            data-validation="required">
        </div>
      </div>
      <div class="form-group">
        <div class="contact-field">
          <input name="phone" type="text" placeholder="Contact No."
            data-validation="required">
        </div>
      </div>
      <div class="form-group">
        <div class="contact-field">
          <input name="subject" type="text" placeholder="Subject"
            data-validation="required">
        </div>
      </div>
      <div class="form-group">
        <div class="contact-field">
          <input name="email" type="email" placeholder="Email Address"
            data-validation="required email"
                        data-validation-error-msg-email="Invalid email, please try again.">
        </div>
      </div>
      <div class="form-group">
        <div class="contact-field">
          <textarea name="message" placeholder="Message" rows="5"
            data-validation="required"></textarea>
        </div>
      </div>
      <button type="submit" form="contact-form" class="contact-form-btn">Submit</button>
      <!--Email submit to hello@studiorantz.co.nz-->
    </section>
  </form>
  </div>
</div>
