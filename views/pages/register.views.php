<?php
// Import Header and Navbar:
require('./views/partials/header.php');
?>


<!-- App Container Start -->
<div id="app-container" class="w-full h-full ">


    <!-- Register Start -->
    <div class="flex h-full w-full bg-primary text-white ">
        <div class="flex justify-center items-center w-full max-sm:hidden">
            <!-- Contents -->
            <img src="https://wallpaperaccess.com/full/436209.jpg" alt="logo" class="relative h-full box-content opacity-10">
            <div class="relative h-full w-full">
            </div>
            <div class="absolute flex items-center flex-col">
                <img src="../../../contents/assets/imgs/logo.png" alt="" width="60%" class="">
                <div class="p-4">
                    <h1 class="text-2xl ">Welcome to my website!</h1>
                    <p class="text-xs">The world is so beautiful. Keep your best. Think positive.</p>
                </div>
            </div>
        </div>
        <form action="/register" method="POST" id="regis-form" class="flex flex-col gap-[0.5rem] shadow-md justify-center items-center w-[36rem] min-w-[20rem] max-sm:w-full">
            <div class="flex flex-col items-center">
                <h1 class="text-3xl">Register</h1>
            </div>
            <label class="flex w-full flex-row">
                <label class="flex w-full flex-col">
                    <label class="ml-9 text-[1rem]">First Name</label>
                    <input type="text" name="firstName" id="firstname" placeholder="First Name" class="p-2 rounded-md max-w-8/10 ml-9 w-9/12 outline-none border-2 border-white bg-transparent">
                    <span id="textfirst" class="ml-9 text-sm"></span>
                </label>
                <label class="flex w-full flex-col">
                    <label class="ml-5">Last Name</label>
                    <input type="text" name="lastName" id="lastname" placeholder="Last Name" class="p-2 rounded-md max-w-8/10 ml-5 w-9/12 outline-none border-2 border-white bg-transparent">
                    <span id="textlast" class="ml-9 text-sm"></span>
                </label>
            </label>
            <label class="w-full flex flex-col">
                <label class="ml-9">Username</label>
                <input type="text" name="username" id="username" placeholder="User Name" class="p-2 rounded-md max-w-8/10 w-10/12 ml-9 outline-none border-2 border-white bg-transparent ">
            </label>
            <label class="flex w-full flex-row">
                <label class="flex w-full flex-col">
                    <label class="ml-9">Date Of Birth</label>
                    <input type="date" name="birthDate" id="date" placeholder="date" class="p-2 rounded-md max-w-8/10 ml-9 w-9/12 outline-none border-2 border-white bg-transparent">
                </label>
                <label class="flex w-full flex-col">
                    <label class="ml-5">Gender</label>
                    <select id="gender" name="gender" class="p-2 rounded-md max-w-8/10 ml-5 w-9/12 outline-none border-2 border-white bg-transparent">
                        <option selected disabled>Choose gender</option>
                        <option value="F" class="text-black">Female</option>
                        <option value="M" class="text-black">Male</option>
                    </select>
                </label>
            </label>
            <label class="flex w-full flex-col">
                <label class="ml-9">Your Country</label>
                <input type="text" name="country" id="country" placeholder="Country" class="p-2 rounded-md max-w-8/10 ml-9 w-10/12 outline-none border-2 border-white bg-transparent">
            </label>
            <label class="flex w-full flex-col">
                <label class="ml-9">Email</label>
                <input type="email" name="email" onkeyup="validateEmail()" id="email" placeholder="Email address" class="p-2 rounded-md max-w-8/10 ml-9 w-10/12 outline-none border-2 border-white bg-transparent">
                <span id="text" class="ml-9 text-sm"></span>
            </label>
            <label class="flex w-full flex-row">
                <label class="flex w-full flex-col">
                    <label class="ml-9">Password</label>
                    <input type="password" name="password" id="password" onkeyup="validatePassword()" placeholder="Password" class="p-2 rounded-md max-w-8/10 ml-9 w-9/12 outline-none border-2 border-white bg-transparent">
                    <span id="textpwd" class="ml-9 text-sm"></span>
                </label>
                <label class="flex w-full flex-col">
                    <label class="ml-5">Confirm_Password</label>
                    <input type="password" name="confirmpassword" onkeyup="validateConfirmPassword()" id="confirmpassword" placeholder="Confirm Password" class="p-2 rounded-md max-w-8/10 ml-5 w-9/12 outline-none border-2 border-white bg-transparent">
                    <span id="textconfirmpassword" class="ml-9 text-sm"></span>
                </label>
            </label>
            <button class="btn p-2 mt-4 rounded-md max-w-8/10 w-10/12 border-2 border-secondary text-secondary hover:bg-secondary hover:text-white" onkeyup="checkform()">Register</button>
            <span><a href="/" class="underline text-secondary">Back</a></span>
        </form>
    </div>
    <!-- Register End -->
    <script src="../../../scripts/form.validation.js"></script>


</div>
<!-- App Container End -->



<?php
// Import Footer:
require('./views/partials/footer.php');
?>