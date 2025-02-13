<?php
    include __DIR__ . "/db.php";
?>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</head>
<?php session_start(); ?>

<div class="flex min-h-screen">
    <!-- Navbar -->
    <div class="card w-72 bg-white p-5 shadow-md shadow-purple-200/50 rounded-md">
  <ul class="w-full flex flex-col gap-2">
  <li class="flex-center cursor-pointer p-4 font-semibold w-full whitespace-nowrap">
      <a href="./home.php"><button class="flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-purple-100 hover:shadow-inner focus:bg-gradient-to-r from-purple-400 to-purple-600 focus:text-white text-gray-700 transition-all ease-linear">
      หน้าหลัก
      </button></a>
    </li>
    <li class="flex-center cursor-pointer p-4 font-semibold w-full whitespace-nowrap">
    <a href="./administrator.php"><button class="flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-purple-100 hover:shadow-inner focus:bg-gradient-to-r from-purple-400 to-purple-600 focus:text-white text-gray-700 transition-all ease-linear">
      ข้อมูลผู้บริหาร
      </button></a>
    </li>
    <li class="flex-center cursor-pointer p-4 font-semibold w-full whitespace-nowrap">
    <a href="./staff.php"><button class="flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-purple-100 hover:shadow-inner focus:bg-gradient-to-r from-purple-400 to-purple-600 focus:text-white text-gray-700 transition-all ease-linear">
      ข้อมูลบุคลากร
      </button></a>
    </li>
    <li class="flex-center cursor-pointer p-4 font-semibold w-full whitespace-nowrap">
    <a href="./students.php"><button class="flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-purple-100 hover:shadow-inner focus:bg-gradient-to-r from-purple-400 to-purple-600 focus:text-white text-gray-700 transition-all ease-linear">
      ข้อมูลนักเรียน นักศึกษา
      </button></a>
    </li>
    <li class="flex-center cursor-pointer p-4 font-semibold w-full whitespace-nowrap">
    <a href="./courses.php"><button class="flex size-full gap-4 p-4 group font-semibold rounded-full bg-cover hover:bg-purple-100 hover:shadow-inner focus:bg-gradient-to-r from-purple-400 to-purple-600 focus:text-white text-gray-700 transition-all ease-linear">
      ข้อมูลสาขาวิชาที่เปิดสอน
      </button></a>
    </li>
  </ul>
</div>

    

