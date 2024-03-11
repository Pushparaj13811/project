<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project - Login Page</title>
  <link rel="stylesheet" href="output.css" />
  <link rel="stylesheet" href="./css/login.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" /> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      background-color: rgb(17 24 39);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
  </style>
</head>

<body>
  <?php
  @include "navbarSignupLogin.php";
  ?>
  <div class="w-full max-w-sm p-4  rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 ">
    <form id="loginForm" class="space-y-6" action="#" method="post">
      <h5 class="text-xl font-medium text-gray-900 dark:text-white">
        Change password
      </h5>
      <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
        <input type="email" name="email" id="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
          placeholder="name@company.com" />
        <div id="emailError" class="error"></div>
      </div>
      <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
          password</label>
        <input type="password" name="password" id="password" placeholder="••••••••"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
        <div id="passwordError" class="error"></div>
      </div>
      <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
          password</label>
        <input type="password" name="password" id="password" placeholder="••••••••"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
        <div id="passwordError" class="error"></div>
      </div>
      <div class="flex items-start">
        <div class="flex items-center h-5 p-4">
          <input id="newsletter" aria-describedby="newsletter" type="checkbox"
            class="w-4  h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
            required="">
        </div>
        <div class="ml-3 text-sm p-2">
          <label for="newsletter" class="font-light text-gray-500 dark:text-gray-300">I accept the <a
              class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and
              Conditions</a></label>
        </div>
      </div>
      <button type="submit"
        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Reset Password
      </button>
    </form>
  </div>
  </div>
  </section>
  <script src="./script/loginValidation.js"></script>
</body>

</html>