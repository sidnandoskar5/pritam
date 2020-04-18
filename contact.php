<?php include_once('./header.php'); ?>
<section class='about-us'>
    <div class="container pg-content">
        <h2>Contact Us</h2>
        <div class="content-wrapper">
            <form action="/contact.php" class='row' method='POST'>
                <div class="input-wrapper col-md-6">
                    <input type="text" name='fname' class='input-block' placeholder='Name*' required/>
                </div>
                <div class="input-wrapper col-md-6">
                    <input type="text" name='email' class='input-block' placeholder='Email*' required/>
                </div>
                <div class="input-wrapper col-md-12">
                    <textarea name="message" placeholder="Message" class='input-block text-area-block'></textarea>
                </div>
                <div class="input-wrapper input-submit-wrapp col-md-12">
                    <input type="submit" value="Submit" class='input-submit' />
                </div>
            </form>
        </div>
    </div>
</section>
<?php include_once('./footer.php'); ?>