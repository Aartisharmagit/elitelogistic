//blank line is required
app.controller('ctrl_blog',function($scope,$http){
	$http.get('login/check_valid_session').success (function(data) {if(data!=1){window.location.assign('<?=site_url("login")?>');}});
	
	function getTodayDate() {
		var today = new Date();
		var dd = String(today.getDate()).padStart(2, '0');
		var mm = String(today.getMonth() + 1).padStart(2, '0');
		var yyyy = today.getFullYear();
		return yyyy + '-' + mm + '-' + dd;
	}

	$scope.loader=function(){
		$http.get("blog/view_data").success(function(data){
			$scope.datadb=data;
		})
	}

	$('#DOB1').datepicker({
		dateFormat: 'yy-mm-dd',
		onSelect: function(dateText) {
			$scope.$apply(function() {
				if (!$scope.x) { $scope.x = {}; }
				$scope.x.date = dateText;
			});
		}
	});
	
	$scope.loader();
	$scope.showSeo=false;
	
	$scope.update_call=function(y){
		$scope.x=angular.copy(y);
		$scope.showSeo=true;
		$scope.step='basic';
		if(document.getElementById('image')) {
			document.getElementById('image').value = '';
		}
		window.scrollTo(0,0);
	}

	$scope.remove_current_image=function(){
		if(confirm("Are you sure you want to remove the current image?")) {
			$scope.x.image = '';
			if(document.getElementById('image')) {
				document.getElementById('image').value = '';
			}
		}
	}

	$scope.slugify=function(){
		if(!$scope.x || !$scope.x.title) return;
		if(!$scope.x.slug){
			var str = $scope.x.title.toLowerCase();
			str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ');
			str = str.replace(/^\s+|\s+$/gm,'');
			$scope.x.slug = str.replace(/\s+/g, '-');
		}
	}
	
	$scope.filter_new=function(){
		$scope.x={
			date: getTodayDate(),
			time: '3 min read',
			author: 'Admin'
		};
		$scope.showSeo=false;
		$scope.step='basic';
		if(document.getElementById('image')) {
			document.getElementById('image').value = '';
		}
	}

	// Auto-init with today's date and defaults
	$scope.filter_new();
	
	$scope.options = {
		    height: 150,
		    toolbar: [
		               ['style', ['style','bold', 'italic', 'underline']],
      		           ['fontname', ['fontname']],
      		           ['fontsize', ['fontsize']],
      		           ['color', ['color']],
      		           ['table',['table']],
      		           [ 'insert', [ 'link' ]],
      	               ["view", ["codeview"]]
		        ]
		  };
	
	// Auto calculate read time as description changes
	$scope.$watch('x.description', function(newVal) {
		if (newVal && $scope.x && (!$scope.x.time || $scope.x.time.indexOf('min read') !== -1)) {
			var cleanText = newVal.replace(/<[^>]*>/g, ' ').trim();
			var words = cleanText.split(/\s+/).filter(function(w){ return w.length > 0; }).length;
			var mins = Math.max(1, Math.ceil(words / 200));
			$scope.x.time = mins + ' min read';
		}
	});

	$scope.save_data=function(y){
        $('#submitbtn').attr('disabled',true);
        var formData = new FormData(document.getElementById('form1'));
		$.ajax({
			type: "POST",
			url: "blog/save_data",
            data: formData,
            contentType: false,
            processData: false,
			beforeSend: function()
			{
				$('#webprogress').css('display','inline');
			},
			success: function(data){
				data = (data || '').toString().trim();
				console.log(data);
				if(data=="1" || data=="0")
				{
					$scope.loader();
					messages("success", "Success!","Blog Saved Successfully", 3000);
					$scope.filter_new();
				}
				else
				{
					messages("danger", "Warning!",data, 4000);
				}
				$('#webprogress').css('display','none');
				$('#submitbtn').attr('disabled',false);
			},
			error: function(xhr, status, error) {
				$('#webprogress').css('display','none');
				$('#submitbtn').attr('disabled',false);
				messages("danger", "Error!", "Save failed: " + error, 4000);
			}
		});
	}
	
	$scope.delete_data=function(id)
	{
		if(confirm("Deleting Blog may hamper your data associated with it."))
		{
			if(confirm("Are you Sure to DELETE ??"))
			{
				$http.get("blog/delete_data?id="+id).success(function(data){
					data = (data || '').toString().trim();
					console.log(data);
					if(data=="1")
					{
						messages("success", "Success!","Blog Deleted Successfully", 3000);
					}
					else
					{
						messages("danger", "Warning!","Blog not Deleted", 4000);
					}
					$scope.loader();
				})
			}
		}
	}
	
});
