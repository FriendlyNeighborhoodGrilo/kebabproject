<?php $this->view("kebab_template/header",$data);?>
<header class="section background-white">
</header>
<div style="">
<section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Upload Image</h4>
              <form name="contactForm" class="customform" method="post">
                
                <div class="s-12"> 
                  <input name="title" class="subject" placeholder="Subject" title="Subject" type="text" require>
                  <p class="subject-error form-error">Please enter the title.</p>
                </div>
                <div class="s-12"> 
                  <input name="file" class="subject" type="file" require>
                  <p class="subject-error form-error">Please select a file.</p>
                </div>
                <div class="s-12">
                  <textarea name="description" class="required message" placeholder="Description" rows="3"></textarea>
                  <p class="message-error form-error">Please enter your message.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
              </form>
            </div>           
          </section> 
</div>

<?php $this->view("kebab_template/footer",$data);?>