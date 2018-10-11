	var module = angular.module("dw",[]);


	module.controller("Ctrl3",function($scope,$http){
		$scope.empno;
		$scope.select_district;
		$scope.district=[];
		$scope.all_district;
		$scope.all_ids;
		//$scope.district;
		//$scope.vari = false;

		/*$scope.send = function(disname){
			console.log(disname);
		}*/
		function send(disname,state_id){
			console.log(disname);
			console.log(state_id);
			var angular_var1;
			var angular_var2;
			$http({
			method : 'POST',
			url : 'register.php',
			data:{
				angular_var1 : state_id,
				angular_var2 : disname
			}
		}).then(function(response){
			console.log(response);
			//console.log(angular_var2);
			//$scope.chosen = response.data[0];
		});
	}

		$scope.see1 = function(){
		
		$scope.district.length = 0;
		//console.log(variable);
		if($scope.select_state!=undefined){
			//onsole.log($scope.select_state);
			for (var i = $scope.empno.length - 1; i >= 0; i--) {
				if($scope.empno[i]==$scope.select_state){
					//console.log(i+1);
					for (var j = $scope.all_district.length - 1; j >= 0; j--) {
						if($scope.all_ids[j]==(i+1)){
							var temp=i+1;
							//console.log("here");
		
							//$scope.district[$scope.all_district.length-j] = $scope.all_district[$scope.all_district.length-j];
							
							//console.log($scope.all_district[j]);
							$scope.district.push($scope.all_district[j]);
							//console.log($scope.district[j]); 
						}
					}
				}
			}
		}
		send($scope.select_district,temp);
		
	}

		//console.log($scope.select_district);
		
	    $scope.getPeople = function() {
	          $http({
	              
	              method: 'GET',    
	              url: 'add.php'
	              
	          }).then(function (response) {
	              
	              // on success
	              //console.log(response.data[0][0]);
	              $scope.empno = response.data[0];
	              $scope.all_district = response.data[1];
	              $scope.all_ids = response.data[2];

	              //console.log($scope.empno[0]);

	              /*for (var i = 0; i <= $scope.empno.length - 1; i++) {
	              	console.log("cew");
	              }*/

	              
	          }, function (response) {
	              
	              // on error
	              console.log(response.data,response.status);
	              
	          });

	          $scope.see1();

	    };

	$scope.select_state;
	$scope.vari = $scope.getPeople();
	//console.log($scope.select_state);	

	

	

	$scope.chosen;
	$scope.see = function(){
		$http({
			method : 'POST',
			url : 'register.php',
			data:{
				angular_var : $scope.myvar
			}
		}).then(function(response){
			console.log(response.data[0]);
			$scope.chosen = response.data[0];
		});
	}





	});

