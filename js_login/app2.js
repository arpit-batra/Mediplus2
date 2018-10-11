var module = angular.module("log",[]);
//module.controller("Ctrl3",main);
module.controller("Ctrl2",function($scope,$http){

	$scope.contact_name;
	$scope.vari = false;
  $scope.new_var;
  $scope.vari3 = false;  

    $scope.getPeople = function() {
          $http({
              
              method: 'GET',    
              url: 'php_login/2.php'
              
          }).then(function (response) {
              
              $scope.contact_name = response.data;
              if($scope.contact_name==0){
                $scope.vari = true;
                $scope.vari3 = true;
                $scope.new_var = 1;
              }
              else{
                $scope.vari = false;
                $scope.vari3 = false;
                console.log("wdqd");
                $scope.new_var = 1;
              }
              
          }, function (response) {
              console.log(response.data,response.status);           
          });
    	return $scope.vari;
    };

    $scope.vari2 = 3;
    $scope.getPeople2 = function() {
          $http({
              
              method: 'GET',    
              url: 'php_login2/2.php'
              
          }).then(function (response) {
              
              $scope.contact_name2 = response.data;
              if($scope.contact_name2==2){
                $scope.vari2 = 2;

                //console.log("asd");
              }
              else{
                $scope.vari2 = 3;
                //console.log("wdqd");
              }
              
          }, function (response) {

              console.log(response.data,response.status);
              
          });
      return $scope.vari2;
    };

$scope.vari = $scope.getPeople();
$scope.vari2 = $scope.getPeople2();
// $scope.vari2 = $scope.getPeople2();

// console.log($scope.vari2);

// $scope.see = function(){
//   if($scope.vari==0)
//     $scope.checks = 5;
//   else if($scope.vari2==2)
//     $scope.checks = 6;

// }

$scope.progress = function(d,doctor,progress1,progress2,progress3){
    
    
    //console.log(progress1[0]);

    var c1 = 0;
    var c2 = 0;
    var c3 = 0;
    $scope.per = (progress1[0] + progress2[0] + progress3[0]);

    if(progress1[0]=='1')
      c1 = 1;
    if(progress2[0]=='1')
      c2 = 1;
    if(progress3[0]=='1')
      c3 = 1;

     $scope.per = ((c1+c2+c3)*100)/3;
    console.log($scope.per);

   $scope.my_disease = d[0];
   //console.log(d[0]);
   $scope.my_doctor = doctor[0];
};

$scope.patient = function(){
  $http({
      
      method: 'GET',    
      url: 'php_login/return.php'
      
  }).then(function (response) {
    console.log(response);
    $scope.progress(response.data[0],response.data[1],response.data[2],response.data[3],response.data[4]);      

  }, function (response) {

      console.log(response.data,response.status);
      
  });

}

$scope.patient();

$scope.progress2 = function(d,patient,progress1,progress2,progress3){
     $scope.myprog1=progress1;
     $scope.myprog2=progress2;
     $scope.myprog3=progress3;
  
   $scope.d_disease = d;
   $scope.d_patient = patient;
   console.log($scope.d_patient);
   console.log($scope.d_disease);
};

$scope.doctor=function(){
  $http({
      
      method: 'GET',    
      url: 'php_login2/d_patient.php'
      
  }).then(function (response){
    console.log(response);
    $scope.progress2(response.data[0],response.data[1],response.data[2],response.data[3],response.data[4]);      

  }, function (response) {

      console.log(response.data,response.status);
  });

}

$scope.doctor();


$scope.submit_to = function(index){
  //console.log($scope.pr[0]);
  //console.log($scope.all);
  console.log($scope.checkboxModel.value1);
  console.log($scope.checkboxModel.value2);
  console.log($scope.checkboxModel.value3);
  console.log($scope.d_disease[index]);
  console.log($scope.d_patient[index]);

  $http({
      method : 'POST',
      url : 'php_login2/treat.php',
      data:{
        angular_var1 : $scope.d_disease[index],
        angular_var2 : $scope.d_patient[index],
        angular_var3 : $scope.checkboxModel.value1,
        angular_var4 : $scope.checkboxModel.value2,
        angular_var5 : $scope.checkboxModel.value3

       }
    }).then(function(response){  
      console.log(response); 
    });


  //console.log($scope.pr1);
}

$scope.checkboxModel = {
       value1 : true,
       value2 : true,
       value3 : true
     };



$scope.pr;

$scope.put = function(index){
  console.log(index);
  $scope.pr[index] = 1;
}

console.log($scope.all);

// $scope.vari3 = false;

// $scope.tell_login = function(){
//   $scope.vari3 = true;
// }

$scope.vari3 = false;
$scope.seePeople = function() {
          $http({
              
              method: 'GET',    
              url: 'php_login/2.php'
              
          }).then(function (response) {
              
              $scope.contact_name = response.data;
              if($scope.contact_name==0){
                //$scope.vari = true;
                $scope.vari3 = true;
                console.log($scope.vari3);
                return $scope.vari3;  
                //$scope.new_var = 1;
              }
              else{
                //$scope.vari = false;
                $scope.vari3 = false;
                //console.log("wdqd");
                //$scope.new_var = 1;
              }
              
          }, function (response) {
              console.log(response.data,response.status);           
          });
      return $scope.vari3;
      console.log($scope.vari3);
    }; 

});



// function main($scope){
//   //$scope.namec = "sdw";
//   $scope.namec;
//   console.log($scope.namec);
//   //console.log($scope.variable);
// }




//to display name in logged in
