<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


  $mysqli = new mysqli('localhost', 'root', 'root', 'trainning_orangehrm');
 
  if (mysqli_connect_errno())
  {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
 
  for ($i=11; $i<=20; $i++)
  {
//  $query = "INSERT INTO `hs_hr_employee` (`emp_number`, `employee_id`, `emp_lastname`, `emp_firstname`, `emp_middle_name`, `emp_nick_name`, `emp_smoker`, `ethnic_race_code`, `emp_birthday`, `nation_code`, `emp_gender`, `emp_marital_status`, `emp_ssn_num`, `emp_sin_num`, `emp_other_id`, `emp_dri_lice_num`, `emp_dri_lice_exp_date`, `emp_military_service`, `emp_status`, `job_title_code`, `eeo_cat_code`, `work_station`, `emp_street1`, `emp_street2`, `city_code`, `coun_code`, `provin_code`, `emp_zipcode`, `emp_hm_telephone`, `emp_mobile`, `emp_work_telephone`, `emp_work_email`, `sal_grd_code`, `joined_date`, `emp_oth_email`, `termination_id`, `custom1`, `custom2`, `custom3`, `custom4`, `custom5`, `custom6`, `custom7`, `custom8`, `custom9`, `custom10`) VALUES
//($i, '0014$i', 'Amara$i', 'Ruchira$i', 'bandara$i', 'ru$i', 0, NULL, '2013-02-03', NULL, NULL, 'M', '2$i', '3$i', '5$i', '', NULL, '', 1, 1, 2, 2, 'sreet $i', 'sreet $i', '2$i', '0', '3$i', '7$i', '8$i', '9$i', '6$i', 'Sisira+sisira@orangehrm.com', NULL, '2013-02-28', 'sisiras+ru@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";  
   $query = "INSERT INTO `hs_hr_employee` (`emp_number`, `employee_id`, `emp_lastname`, `emp_firstname`)
       VALUES($i,'00$i','SAMARA','SISIRA')";
  
//  $query ="INSERT INTO `hs_hr_emp_picture` (`emp_number`, `epic_picture`, `epic_filename`, `epic_type`, `epic_file_size`, `epic_file_width`, `epic_file_height`) VALUES
//($i, 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000003c0000ffee000e41646f62650064c000000001ffdb0084000604040405040605050609060506090b080606080b0c0a0a0b0a0a0c100c0c0c0c0c0c100c0e0f100f0e0c1313141413131c1b1b1b1c1f1f1f1f1f1f1f1f1f1f010707070d0c0d181010181a1511151a1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1fffc0001108005f004603011100021101031101ffc4009600000105010101000000000000000000000601030405070200080100020301010000000000000000000000000103040502061000020103030203060306070100000000010203001104211205310641221351617181140791a142c15272234315b13262829225160811000202010301060407010000000000000001110203213104124151612213057181b152f091a1d132231462ffda000c03010002110311003f00a4d6f5c00a2f7a00e67c88608cc9348238c756636a0201bcff00b81c7634c638217c8506c64b8453f0b824d293ae91ce3fbff8acad248a68187810187cad4e45d2116266e26626fc5996551a36d3a83ec23a8f9d02824053f1a005096f85303d4011ec6feca407890a0b31b002e4fc28609199773f299d999464bd905cc308b9b2a9b16f67b2b892588287138be5f929557171a7994e9b9149d687648eab8ed6d904b8bf6bfbf64c7bff006dc828c0d822d8fbae2f5c7ad525ff002dfb87a0ff00d5f6af2512731c7cb86d278ba1512c6bab2f4b3103507ad775b27b115f1b5b9a444e92469221dc8e032b0f1045c1aec80ef5f95007adf853023db5a407329d904ae4d822127c74e96ae6fb1dd3732be661639c55b52c6cd6f017276fc35a8e4960d0fedd667a68b8d60a874436f1aa798d0e3b37fed74ca31a7aa14a91a7b7f1ae288b592da12bbefb678de67b6f33132e3127f29e489986b1c8aa4ab29f0a99f95a82b37d49a6611c6f9f8fc565d01892df0da2af2d8c77b92b6d85310b6f750047b6b401ce52cdf4192d1a8bec03735acb736beb6a8f23491361ab6f4339c5c0397c988e4b98d4924fb85436b6858a525c179f5d95c765c1f4932e228d14ac4d3487f8235d4d44ab3b93f535b07fdabddfddf87dc781839993ebe266b22c65b1df19fcc030babfb41ae6f0b627c76b5b4614f3df76396feebca76ee2719166ae209219248f211651e523589b53f2aea656a476693d005e3a030f1d8b11fd11229f928abcb6321ee48db4c42da8018db40157dc70c8f81b941223dc768fde2b606a972eaf466afb6e44baabdae0a9e096393122c92a3ea197d376f1f21b588350cb825b24acc39ecb9b859b2ce3e7624539246b2283a8f65eb968971a4c95de3cd705277560e3f1f3c510c3748e4208511c87cda5fa9b75a1a924509a3494ed7ed6e41e4e45a085f3d82caf226c3b980bab9206eb83efaed6db91e4aebb194b476623f74dbf0ad1300422981cebf3a006b650023c292c6d138dcac2c41ae6d55650cef1e474b4adcab93826e3a1fabf5cca990ede422db4aff8dea8e4a74b8346997ad4c4117869f37fb84df420364c51bba46c42ee23c013eda564a353baddf60f76bf62e4f3dc9af27c8f1e276beec98bea8c12024fb4295f7f5aebafb112d70ceb6934bc6f5f03143e271e788c4c269a321a447f57cb66da509f514b11663eca8fa7aac8796fd157dd00d15fc6b4cc2392b4009b35a0064213d2801c58ed40107b83213e8a289581685dfd551d46f0a45fe22aaf22ae53ef45ce33f2bf8820f91f4d94b329b1f123d951aac92bb41a4761ae2e537d560f28f8ec403228da6c7c46beda51058a6471a32efb9f34c93a61a3ef8e05f330b799db53d34a9f0638d4a3caccece0a2b5582a1c914009b4d303844b0b5202272bca6271b8ed24ce3d4b131c77d4dbf65348001e17b8866c7978d3b5f2320c798ac7f56e4f4dd7fdac9473b1eb46b6e944dc3be965e23793bf516bd5548b2c33fb6ff6f33b90e4a0ccce9a4c5e3d9c3490c6cc8d2aaeb6622de5ae6f74754ab2be2fb818cb93933bc05b8e9b332040d1758d7d53b06d3d54a5ab6b3e0fe9c7917774bf8adbf43215ff00b6f5f19fcc23c0e7f86cf0062e5a339fe9b1d8ff00f16b55182627329075a04211d28001fb83ee0a41be0e380dfd0cada9f90a7030267e70ceb23649696690962e4fed34c0a9e14bcf968a8e63961663137fa1ceeb7e66b4b8f83fd189d17f2aec55c99bd1c8acff008bdcda3b5bedf725cde2491cabe8e52aef89c8bab8f75615dc3836eaa54875c961f29db3f6ef91767ffb08b15e181db4b6e1b74f85ea15bea496db43e76e19621c44d8923a89502bc4a586e664367da0f5f2b57acc717e13abdd6abe5bfe879ccb35e427d9b08a181b780e86b18ba5c6077373983658b259e31fd293cebf9f4f952800893ee19386fbb102e6803d3b126263717bfea1a6b4ba40c9322594cb62c4b48db47ce818fb32346502ea74b9f0a60318531c6ca4941b184ddbf83c7f0ab9edf9fd3ca995b958bae8d1b67dbdff00e88c3e238ec5c3cac05cbc5c7b867f50459512dcdb46dcb2a15f65add2ad723898795679296e8b3dd3fafcfe6183959305552cba92da024fbabf73f85ee3ec139bc29947d44df4cb04f1fa720902ef3e5b9baed37b835955f6dc8b32a596fafc51a0f9d4f49dd3f0f99f38627a8f9d871b02a637694b1d2f6000fc4d69665d2a1ada7f633e8e5c845b940d7e359a58177e80eb6a00eb70bfbedf9d0009f251c9712c6fb1909229318e71f24b245be520b7e9205b4a1009200b3ab30ba1d1d4f42a74229a70e44cbbe1f1708b3c70c62296d69a07d4303d1918ea2bd970563b566aa256c79fe5daf57e673dcff72cb0f0b3e2e36199a447e3e3c8782350de60f1ed0d214074bee0a0f43635d61c7379fb3cb3e12ff0c5972f923eef347c8aae7c2a773e0803cc63f311d0f5da7f3acaf7e495eb1dc5cf696dd1cf792cc88acaada6eff2b1e87ddf1b5601aa2df5207c6801093bd47890680073955629606c0dee7e7498238e35e461b596c478f81f850863d3aa9ea40f98a00b7c4dcd890ca9a67e2f9a38fa34b0dfccb6f1f757a4f6cb378969e6a3d3feabdabc4c6e6d52bbfb6dbf83ec612e0450bf0889bc28632798902c4c8c75f9d7a0c11e947c7ea64669f53f2fa01fc9bcefdc588b2a953182aa4e971aea2fd45797f7ab37753d86f7b6552a382d1c26cfe65b6dc75b7cbe7588688a14ee074bf88b8a006db77d520f0b1d7e5401ffd9, 'parkin_thumb.jpg', 'image/jpeg', '2361', '70', '95')
//";  
  $stmt = $mysqli->prepare($query);
  $stmt->execute();
  //echo $query;
  echo $i;
  
  }
    
  $stmt->close();
  $mysqli->close();
