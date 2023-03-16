<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
      <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link align-middle px-0">
                <span class="ms-1 d-none d-sm-inline text-dark">ᴅᴀꜱʜʙᴏᴀʀᴅ</span>
              </a>
        </li>
        <li>
            <a href="/products" class="nav-link align-middle px-0">
                <span class="ms-1 d-none d-sm-inline text-dark">ᴋᴇʟᴏʟᴀ ᴅᴀᴛᴀ ᴘʀᴏᴅᴜᴋ</span>
            </a>
        </li>
      </ul>
      <hr/>
      <div class="dropdown pb-4">
        <form action="/logout" method="POST">
          <?php echo csrf_field(); ?>
          <button type="submit" class="d-flex align-items-center text-custom text-decoration-none bg-transparent border-0">
            <span class="d-none d-sm-inline mx-1">ʟᴏɢᴏᴜᴛ</span>
          </button>
        </form>
      </div>
    </div>
  </div><?php /**PATH D:\Amalia\project-properti\resources\views/pages/sidebar.blade.php ENDPATH**/ ?>