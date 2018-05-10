<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="c" value="user">
						<input type="hidden" name="a" value="store">
						<div class="row">   		
							<h2>Create user</h2>
						</div>
						<div class="row">   		
							<label>Email:</label>
						</div>
						<div class="row">   		
							<input type="email" class="form-control p-2 m-2" name="email" required>
						</div>
						<div class="row">   		
							<label>Password:</label>
						</div>
						<div class="row">   	
							<input type="password" class="form-control p-2 m-2" name="password" required> 
						</div>
						<div class="row">   		
							<label>Role:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="role">
								<option value="admin">Admin</option>
								<option value="user">User</option>
							</select>
						</div>
						<div class="row">   		
							<label>Status:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="status">
								<option value="visible">Visible</option>
								<option value="disbale">Disable</option>
							</select>
						</div>
						<div class="row">   
                            <button class="btn btn-success p-2 m-2"  onclick="ntf.showNotification('top','left')">Apply</button>
							<button class="btn btn-success p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=user" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
						</div>
                    </form>
                </div>
            </div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>