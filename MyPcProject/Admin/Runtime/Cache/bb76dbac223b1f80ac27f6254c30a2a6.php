<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
    	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Admin/Common/css/body.css"/>
		
	</head>
	<body>
		<div ng-app="myapp" ng-controller="mycontroller" id="main">
			<div class="header">
				<h1>后台管理</h1>
			</div>
			<div class="body">
				<div class="addinfo">
			        <div>
			            <span>标题 </span><input ng-model="title" type="text"/>
			        </div>
			        <div>
			            <span>简介 </span><input ng-model="info" type="text"/>
			        </div>
			        <div>
			            <span>颜色 </span><input ng-model="color" type="text"/>
			        </div>
			        <div>
			            <span>图片 </span><input ng-model="img" type="file"/>
			        </div>
			        <div>
			            <span>市场价 </span><input ng-model="marketPrice" type="text"/>
			        </div>
			        <div>
			            <span>商店价 </span><input ng-model="StorePrice" type="text"/>
			        </div>
			        <div>
			            <span>库存 </span><input ng-model="stock" type="text"/>
			        </div>
			        <div class="addinfo_btn" ng-click="sub()">提交</div>
			    </div>
			

		        <table>
		            <tr >
		                <td style="width:55px">编号</td>
		                <td style="width:100px;">ID</td>
		                <td >标题</td>
		                <td >图片链接</td>
		                <td >URL</td>
		                <td style="width:70px;">时间</td>
		                <td style="width:70px;">操作</td>
		            </tr>
		           
		               <!-- <tr ng-clok ng-repeat="(k,v) in list" style="text-align:center;height:26px;color:#4C4C4C;">
		                    <td width="10px;">{{k+1}}</td>
		                    <td>{{v.id}}</td>
		                    <td>{{v.title}}</td>
		                    <td>{{v.imgurl}}</td>
		                    <td>{{v.newurl}}</td>
		                    <td>{{v.addtime}}</td>
		                    <td ng-click="del(v.id)"><span>删除</span></td>
		                </tr>
		          -->
		       </table>
			</div>
		</div>
		
	<script type="text/javascript">
    	const app = angular.module("myapp",[]);
    	app.controller("mycontroller",function($scope,$http){
    		$scope.title = "" ;
    		$scope.info = "" ;
    		$scope.color = "" ;
    		$scope.img = "" ;
    		$scope.marketPrice = "" ;
    		$scope.StorePrice = "" ;
    		$scope.stock = "" ;
    	})
    </script>
	</body>
</html>