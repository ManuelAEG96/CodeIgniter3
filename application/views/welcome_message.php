
<div class="content-wrapper">

<h1>Welcome to CodeIgniter, Manuel 🥳</h1>

<h2><?= $string; ?></h2>

<div class="card">
    <div class="card-body">
        

            <?php foreach ($body as $element) { ?>
              
            
            <!-- Post -->
            <div class="post">
                <div class="user-block">
                <img class="img-circle img-bordered-sm" src="<?= base_url()."assets/"; ?>dist/img/user1-128x128.jpg" alt="user image">
                <span class="username">
                    <a href="#"><?= $element->title; ?></a>
                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                </span>
                <span class="description">Shared publicly - 7:30 PM today</span>
                </div>
                <!-- /.user-block -->
                <p>
                <?= $element->body; ?>
                </p>

                <p>
                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                <span class="float-right">
                    <a href="#" class="link-black text-sm">
                    <i class="far fa-comments mr-1"></i> Comments (5)
                    </a>
                </span>
                </p>

                <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
            </div>
            <!-- /.post -->
            <?php } ?>


           
            
    
</div>
</div>

</div>


