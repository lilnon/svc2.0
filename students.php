<?php
    include "./include/header.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
      table,
      tr,
      th,
      td {
        border: 1px solid;
      }
    </style>
  </head>
  <body>
    <main>
      <div
        class="py-12 grid grid-cols-2 gap-2 max-w-7xl mx-auto sm:px-6 lg:px-8"
      >
        <div
          class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2"
        >
          <header class="border-b pb-1 flex items-center space-x-2">
            <h2 class="font-bold text-xl">
              จำนวนนักเรียน นักศึกษา ระดับ ปวช. ปวส.1
            </h2>
          </header>
          <article class="py-2">
            <canvas id="teacherChart"></canvas>
          </article>

          <script>
            const ctx = document.getElementById("teacherChart");
            const years = Array.from(
              {
                length: 2567 - 2558 + 1,
              },
              (_, i) => 2558 + i
            );

            new Chart(ctx, {
              type: "line",
              data: {
                labels: years,
                datasets: [
                  {
                    label:
                      "\u0e1b\u0e23\u0e30\u0e01\u0e32\u0e28\u0e19\u0e35\u0e22\u0e1a\u0e31\u0e15\u0e23\u0e27\u0e34\u0e0a\u0e32\u0e0a\u0e35\u0e1e (\u0e1b\u0e27\u0e0a.)",
                    data: [
                      2145, 2239, 2268, 2516, 2538, 2416, 2481, 2283, 2154,
                      2160,
                    ],
                    borderWidth: 1,
                  },
                  {
                    label:
                      "\u0e1b\u0e23\u0e30\u0e01\u0e32\u0e28\u0e19\u0e35\u0e22\u0e1a\u0e31\u0e15\u0e23\u0e27\u0e34\u0e0a\u0e32\u0e0a\u0e35\u0e1e\u0e02\u0e31\u0e49\u0e19\u0e2a\u0e39\u0e07 (\u0e1b\u0e27\u0e2a.)",
                    data: [775, 686, 711, 816, 887, 907, 984, 1003, 905, 833],
                    borderWidth: 1,
                  },
                ],
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true,
                  },
                },
              },
            });
          </script>
        </div>
        <div
          class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2"
        >
          <header class="border-b pb-1 flex items-center space-x-2">
            <h2 class="font-bold text-xl">
              จำนวนนักเรียน ระดับประกาศนียบัตรวิชาชีพ(ปวช.)
            </h2>
          </header>
          <article class="py-2">
            <table class="table-custom">
              <thead>
                <tr>
                  <th>
                    <p>ประเภทวิชา/สาขาวิชา</p>
                  </th>
                  <th colspan="2">
                    <p>ปวช. 1</p>
                  </th>
                  <th colspan="2">
                    <p>ปวช. 2</p>
                  </th>
                  <th colspan="2">
                    <p>ปวช. 3</p>
                  </th>
                  <th rowspan="2">
                    <p>รวม</p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>พาณิชยกรรม</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>การบัญชี</p></td>
                  <td><p>12</p></td>
                  <td><p>135</p></td>
                  <td><p>8</p></td>
                  <td><p>112</p></td>
                  <td><p>9</p></td>
                  <td><p>114</p></td>
                  <td><p>390</p></td>
                </tr>
                <tr>
                  <td><p>การตลาด</p></td>
                  <td><p>9</p></td>
                  <td><p>77</p></td>
                  <td><p>7</p></td>
                  <td><p>47</p></td>
                  <td><p>6</p></td>
                  <td><p>37</p></td>
                  <td><p>183</p></td>
                </tr>
                <tr>
                  <td><p>การเลขานุการ</p></td>
                  <td><p>3</p></td>
                  <td><p>21</p></td>
                  <td><p>1</p></td>
                  <td><p>25</p></td>
                  <td><p>3</p></td>
                  <td><p>31</p></td>
                  <td><p>84</p></td>
                </tr>
                <tr>
                  <td><p>คอมพิวเตอร์ธุรกิจ</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>34</p></td>
                  <td><p>60</p></td>
                  <td><p>36</p></td>
                  <td><p>54</p></td>
                  <td><p>184</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>24</b></td>
                  <td><b>233</b></td>
                  <td><b>50</b></td>
                  <td><b>244</b></td>
                  <td><b>54</b></td>
                  <td><b>236</b></td>
                  <td><b>841</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>ศิลปกรรม</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>วิจิตรศิลป์</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>12</p></td>
                  <td><p>9</p></td>
                  <td><p>3</p></td>
                  <td><p>5</p></td>
                  <td><p>29</p></td>
                </tr>
                <tr>
                  <td><p>ออกแบบ</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>8</p></td>
                  <td><p>15</p></td>
                  <td><p>7</p></td>
                  <td><p>4</p></td>
                  <td><p>34</p></td>
                </tr>
                <tr>
                  <td><p>คอมพิวเตอร์กราฟิก</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>40</p></td>
                  <td><p>32</p></td>
                  <td><p>37</p></td>
                  <td><p>33</p></td>
                  <td><p>142</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>60</b></td>
                  <td><b>56</b></td>
                  <td><b>47</b></td>
                  <td><b>42</b></td>
                  <td><b>205</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>คหกรรม</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>ธุรกิจคหกรรม</p></td>
                  <td><p>8</p></td>
                  <td><p>9</p></td>
                  <td><p>3</p></td>
                  <td><p>6</p></td>
                  <td><p>6</p></td>
                  <td><p>4</p></td>
                  <td><p>36</p></td>
                </tr>
                <tr>
                  <td><p>แฟชั่นดีไซน์</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>1</p></td>
                  <td><p>83</p></td>
                  <td><p>3</p></td>
                  <td><p>82</p></td>
                  <td><p>169</p></td>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>43</p></td>
                  <td><p>10</p></td>
                  <td><p>23</p></td>
                  <td><p>8</p></td>
                  <td><p>84</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>8</b></td>
                  <td><b>9</b></td>
                  <td><b>47</b></td>
                  <td><b>99</b></td>
                  <td><b>32</b></td>
                  <td><b>94</b></td>
                  <td><b>289</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>อุตสาหกรรมท่องเที่ยว</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>การโรงแรม</p></td>
                  <td><p>15</p></td>
                  <td><p>72</p></td>
                  <td><p>5</p></td>
                  <td><p>50</p></td>
                  <td><p>5</p></td>
                  <td><p>47</p></td>
                  <td><p>194</p></td>
                </tr>
                <tr>
                  <td><p>การโรงแรม (ทวิภาคี)</p></td>
                  <td><p>11</p></td>
                  <td><p>25</p></td>
                  <td><p>4</p></td>
                  <td><p>11</p></td>
                  <td><p>0</p></td>
                  <td><p>12</p></td>
                  <td><p>63</p></td>
                </tr>
                <tr>
                  <td><p>การท่องเที่ยว</p></td>
                  <td><p>5</p></td>
                  <td><p>29</p></td>
                  <td><p>5</p></td>
                  <td><p>26</p></td>
                  <td><p>6</p></td>
                  <td><p>24</p></td>
                  <td><p>95</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>31</b></td>
                  <td><b>126</b></td>
                  <td><b>14</b></td>
                  <td><b>87</b></td>
                  <td><b>11</b></td>
                  <td><b>83</b></td>
                  <td><b>352</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>อุตสาหกรรมอาหาร</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ</p></td>
                  <td><p>41</p></td>
                  <td><p>82</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>123</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>41</b></td>
                  <td><b>82</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>123</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200">
                    <p>ศิลปกรรมและเศรษฐกิจสร้างสรรค์</p>
                  </th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>วิจิตรศิลป์</p></td>
                  <td><p>13</p></td>
                  <td><p>7</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>20</p></td>
                </tr>
                <tr>
                  <td><p>การออกแบบ</p></td>
                  <td><p>5</p></td>
                  <td><p>18</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>23</p></td>
                </tr>
                <tr>
                  <td><p>ดิจิทัลกราฟิก</p></td>
                  <td><p>43</p></td>
                  <td><p>35</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>78</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>61</b></td>
                  <td><b>60</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>121</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200">
                    <p>อุตสาหกรรมแฟชั่นและสิ่งทอ</p>
                  </th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>แฟชั่นและสิ่งทอ</p></td>
                  <td><p>8</p></td>
                  <td><p>11</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>19</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>8</b></td>
                  <td><b>11</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>19</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200">
                    <p>อุตสาหกรรมดิจิทัลและเทคโนโลยีสารสนเทศ</p>
                  </th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>เทคโนโลยีสารสนเทศ</p></td>
                  <td><p>27</p></td>
                  <td><p>7</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>34</p></td>
                </tr>
                <tr>
                  <td><p>เทคโนโลยีธุรกิจดิจิทัล</p></td>
                  <td><p>46</p></td>
                  <td><p>68</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>114</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>73</b></td>
                  <td><b>75</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>148</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200">
                    <p>เทคโนโลยีสารสนเทศและการสื่อสาร</p>
                  </th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>การโปรแกรมคอมพิวเตอร์เว็บและอุปกรณ์เคลื่อนที่</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>28</p></td>
                  <td><p>4</p></td>
                  <td><p>20</p></td>
                  <td><p>10</p></td>
                  <td><p>62</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>28</b></td>
                  <td><b>4</b></td>
                  <td><b>20</b></td>
                  <td><b>10</b></td>
                  <td><b>62</b></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th class="!bg-secondary-200"><p>รวมทั้งหมด</p></th>
                  <th><b>246</b></th>
                  <th><b>596</b></th>
                  <th><b>199</b></th>
                  <th><b>490</b></th>
                  <th><b>164</b></th>
                  <th><b>465</b></th>
                  <th><b>2160</b></th>
                </tr>
              </tfoot>
            </table>
          </article>
        </div>
        <div
          class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2"
        >
          <header class="border-b pb-1 flex items-center space-x-2">
            <h2 class="font-bold text-xl">
              จำนวนนักเรียน ระดับประกาศนียบัตรวิชาชีพ(ปวช.)
            </h2>
          </header>
          <article class="py-2">
            <table class="table-custom">
              <thead>
                <tr>
                  <th>
                    <p>ประเภทวิชา/สาขาวิชา</p>
                  </th>
                  <th colspan="2">
                    <p>ปวส. 1</p>
                  </th>
                  <th colspan="2">
                    <p>ปวส. 2</p>
                  </th>
                  <th rowspan="2">
                    <p>รวม</p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>บริหารธุรกิจ</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>การบัญชี</p></td>
                  <td><p>3</p></td>
                  <td><p>77</p></td>
                  <td><p>5</p></td>
                  <td><p>76</p></td>
                  <td><p>161</p></td>
                </tr>
                <tr>
                  <td><p>การบัญชี (ทวิภาคี)</p></td>
                  <td><p>1</p></td>
                  <td><p>11</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>12</p></td>
                </tr>
                <tr>
                  <td><p>การตลาด</p></td>
                  <td><p>2</p></td>
                  <td><p>18</p></td>
                  <td><p>2</p></td>
                  <td><p>23</p></td>
                  <td><p>45</p></td>
                </tr>
                <tr>
                  <td><p>การจัดการธุรกิจ</p></td>
                  <td><p>3</p></td>
                  <td><p>17</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>20</p></td>
                </tr>
                <tr>
                  <td><p>การจัดการธุรกิจ ม.6</p></td>
                  <td><p>3</p></td>
                  <td><p>21</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>24</p></td>
                </tr>
                <tr>
                  <td><p>เทคโนโลยีธุรกิจดิจิทัล</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>15</p></td>
                  <td><p>28</p></td>
                  <td><p>43</p></td>
                </tr>
                <tr>
                  <td><p>เทคโนโลยีธุรกิจดิจิทัล ม.6</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>11</p></td>
                  <td><p>2</p></td>
                  <td><p>13</p></td>
                </tr>
                <tr>
                  <td><p>การจัดการทั่วไป</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>1</p></td>
                  <td><p>24</p></td>
                  <td><p>25</p></td>
                </tr>
                <tr>
                  <td><p>การจัดการทั่วไป ม.6</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>3</p></td>
                  <td><p>37</p></td>
                  <td><p>40</p></td>
                </tr>
                <tr>
                  <td><p>การจัดการคลังสินค้า (ทวิภาคี)</p></td>
                  <td><p>7</p></td>
                  <td><p>10</p></td>
                  <td><p>4</p></td>
                  <td><p>19</p></td>
                  <td><p>40</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>19</b></td>
                  <td><b>154</b></td>
                  <td><b>41</b></td>
                  <td><b>209</b></td>
                  <td><b>423</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>คหกรรม</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>ธุรกิจคหกรรม</p></td>
                  <td><p>0</p></td>
                  <td><p>6</p></td>
                  <td><p>1</p></td>
                  <td><p>1</p></td>
                  <td><p>8</p></td>
                </tr>
                <tr>
                  <td><p>ธุรกิจคหกรรม ม.6</p></td>
                  <td><p>1</p></td>
                  <td><p>2</p></td>
                  <td><p>0</p></td>
                  <td><p>4</p></td>
                  <td><p>7</p></td>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>10</p></td>
                  <td><p>12</p></td>
                  <td><p>22</p></td>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ (ทวิภาคี)</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>5</p></td>
                  <td><p>7</p></td>
                  <td><p>12</p></td>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ ม.6</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>2</p></td>
                  <td><p>23</p></td>
                  <td><p>25</p></td>
                </tr>
                <tr>
                  <td><p>เชฟอาหารไทย (ทวิภาคี)</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>6</p></td>
                  <td><p>11</p></td>
                  <td><p>17</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>1</b></td>
                  <td><b>8</b></td>
                  <td><b>24</b></td>
                  <td><b>58</b></td>
                  <td><b>91</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>อุตสาหกรรมท่องเที่ยว</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>การโรงแรม</p></td>
                  <td><p>1</p></td>
                  <td><p>4</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>5</p></td>
                </tr>
                <tr>
                  <td><p>การโรงแรม ม.6</p></td>
                  <td><p>1</p></td>
                  <td><p>15</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>16</p></td>
                </tr>
                <tr>
                  <td><p>การโรงแรม (ทวิภาคี)</p></td>
                  <td><p>2</p></td>
                  <td><p>19</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>21</p></td>
                </tr>
                <tr>
                  <td><p>บริการอาหารและเครื่องดืม</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>17</p></td>
                  <td><p>17</p></td>
                </tr>
                <tr>
                  <td><p>บริการอาหารและเครื่องดืม ม.6</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>4</p></td>
                  <td><p>2</p></td>
                  <td><p>6</p></td>
                </tr>
                <tr>
                  <td><p>บริการอาหารและเครื่องดืม (ทวิภาคี)</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>16</p></td>
                  <td><p>16</p></td>
                </tr>
                <tr>
                  <td><p>การท่องเที่ยว (ทวิภาคี)</p></td>
                  <td><p>2</p></td>
                  <td><p>9</p></td>
                  <td><p>4</p></td>
                  <td><p>10</p></td>
                  <td><p>25</p></td>
                </tr>
                <tr>
                  <td><p>การท่องเที่ยว ม.6 (ทวิภาคี)</p></td>
                  <td><p>0</p></td>
                  <td><p>2</p></td>
                  <td><p>1</p></td>
                  <td><p>3</p></td>
                  <td><p>6</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>6</b></td>
                  <td><b>49</b></td>
                  <td><b>9</b></td>
                  <td><b>48</b></td>
                  <td><b>112</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>อุตสาหกรรมโลจิสติกส์</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>การจัดการโลจิสติกส์และซัพพลายเชน ม.6 (ทวิภาคี)</p></td>
                  <td><p>12</p></td>
                  <td><p>8</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>20</p></td>
                </tr>
                <tr>
                  <td><p>การจัดการโลจิสติกส์และซัพพลายเชน (ทวิภาคี)</p></td>
                  <td><p>11</p></td>
                  <td><p>23</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>34</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>23</b></td>
                  <td><b>31</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>54</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200"><p>อุตสาหกรรมอาหาร</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ</p></td>
                  <td><p>8</p></td>
                  <td><p>20</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>28</p></td>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ ม.6</p></td>
                  <td><p>4</p></td>
                  <td><p>3</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>7</p></td>
                </tr>
                <tr>
                  <td><p>อาหารและโภชนาการ (ทวิภาคี)</p></td>
                  <td><p>1</p></td>
                  <td><p>13</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>14</p></td>
                </tr>
                <tr>
                  <td><p>เชฟอาหารไทย (ทวิภาคี)</p></td>
                  <td><p>7</p></td>
                  <td><p>5</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>12</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>20</b></td>
                  <td><b>41</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>61</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200">
                    <p>ศิลปกรรมและเศรษฐกิจสร้างสรรค์</p>
                  </th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>ดิจิทัลกราฟิก</p></td>
                  <td><p>2</p></td>
                  <td><p>1</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>3</p></td>
                </tr>
                <tr>
                  <td><p>ดิจิทัลกราฟิก ม.6</p></td>
                  <td><p>1</p></td>
                  <td><p>1</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>2</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>3</b></td>
                  <td><b>2</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>5</b></td>
                </tr>
                <tr class="thead">
                  <th class="!bg-secondary-200">
                    <p>อุตสาหกรรมดิจิทัลและเทคโนโลยีสารสนเทศ</p>
                  </th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>ชาย</p></th>
                  <th><p>หญิง</p></th>
                  <th><p>รวม</p></th>
                </tr>
                <tr>
                  <td><p>เทคโนโลยีสารสนเทศ</p></td>
                  <td><p>12</p></td>
                  <td><p>26</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>38</p></td>
                </tr>
                <tr>
                  <td><p>เทคโนโลยีสารสนเทศ (ทวิภาคี)</p></td>
                  <td><p>1</p></td>
                  <td><p>2</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>3</p></td>
                </tr>
                <tr>
                  <td><p>เทคโนโลยีสารสนเทศ ม.6</p></td>
                  <td><p>10</p></td>
                  <td><p>14</p></td>
                  <td><p>0</p></td>
                  <td><p>0</p></td>
                  <td><p>24</p></td>
                </tr>
                <tr>
                  <td><b>รวม</b></td>
                  <td><b>23</b></td>
                  <td><b>42</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>65</b></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th class="!bg-secondary-200"><p>รวมทั้งหมด</p></th>
                  <th><b>95</b></th>
                  <th><b>327</b></th>
                  <th><b>74</b></th>
                  <th><b>315</b></th>
                  <th><b>811</b></th>
                </tr>
              </tfoot>
            </table>
          </article>
        </div>
      </div>
    </main>
  </body>
</html>
<?php
    include "./footer.php";
?>