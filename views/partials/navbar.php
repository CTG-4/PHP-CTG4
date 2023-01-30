 <!-- Navigation Start  -->
 <nav class="flex justify-between bg-[#0b1320] text-[#ffffff] max-lg:flex-col max-lg:items-center">
     <!-- Brand Logo -->
     <div class="flex items-center px-4 max-lg:justify-center p-3">
         <img src="/assets/imgs/logo-no-background.png" alt="" width="140">
     </div>
     <!-- Navigation Link  -->
     <div class="flex max-lg:m-2">
         <div class="flex items-center gap-2 mx-2">
             <a href="/" class="flex gap-2 items-center p-2 px-4 rounded-lg text-lg transition duration-200 hover:bg-[#394d5f]">
                 <span class="material-icons">home</span>
                 <span class="max-lg:hidden">Home</span>
             </a>
             <a href="#" class="flex gap-2 items-center p-2 px-4 rounded-lg text-lg transition duration-200 hover:bg-[#394d5f]">
                 <span class="material-icons">explore</span>
                 <span class="max-lg:hidden">Explores</span>
             </a>
             <a href="#" class="flex gap-2 items-center p-2 px-4 rounded-lg text-lg transition duration-200 hover:bg-[#394d5f]">
                 <span class="material-icons">local_activity</span>
                 <span class="max-lg:hidden">Trending</span>
             </a>
         </div>
         <!-- Login Navigation Link -->
         <?php if (isset($_SESSION["user"]) && $_SESSION["user"]["logged"]) : ?>
             <div class="flex items-center gap-2 mr-2">
                 <a href="#" class="flex gap-2 items-center rounded-lg p-2 text-lg transition duration-200 hover:bg-[#394d5f]">
                     <span class="material-icons">shopping_cart</span><span>Cart</span>
                 </a>
                 <a href="/account" class="flex gap-2 items-center rounded-lg p-2 text-lg transition duration-200 hover:bg-[#394d5f]">
                     <span class="material-icons">person</span><span><?= $_SESSION["user"]["username"] ?></span>
                 </a>
                 <a href="/logout" class="flex items-center rounded-lg p-2 text-lg transition duration-200 hover:bg-[#394d5f]">
                     <span class="material-icons">logout</span>
                 </a>
             </div>
         <?php else : ?>
             <div class="flex items-center gap-2 mr-2">
                 <a href="/login" class="flex items-center rounded-lg p-2 text-lg transition duration-200 hover:bg-[#394d5f]">
                     <span class="material-icons">person</span>
                 </a>
                 <a href="/register" class="flex items-center rounded-lg p-2 text-lg transition duration-200 hover:bg-[#394d5f]">
                     <span class="material-icons">app_registration</span>
                 </a>
             </div>
         <?php endif ?>
     </div>
 </nav>
 <!-- Navigation Start  -->