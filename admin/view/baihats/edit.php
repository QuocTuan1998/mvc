<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="public/img/sidebar-2.jpg" >
            <div class="logo">
                <a href="admin.php?c=home" class="simple-text">
                    M.S.C - UNIVERSE
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="admin.php?c=home">
                            <i class="material-icons">home</i>
                            <p>home</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=mission">
                            <i class="material-icons">notifications</i>
                            <p>Mission</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?c=profile">
                            <i class="material-icons">account_box</i>
                            <p>Admin Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://goo.gl/CYpD4c">Channel</a>
                        <a class="navbar-brand" href="https://nguyenvanbinh3479.github.io/">Blog</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="admin.php?c=mission" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">3</span>
                                    <p class="hidden-lg hidden-md">Mission</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=mission">Bình you have new mission</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=mission">Tuấn, are you done your mission?</a>
                                    </li>
                                    <li>
                                        <a href="admin.php?c=mission">Tùng checkout your mission</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin.php?c=profile" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="admin.php?c=login">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
					<form method="post" action="admin.php">
						<input type="hidden" name="id" value="<?php echo $baihat->id; ?>">
						<input type="hidden" name="c" value="baihat">
						<input type="hidden" name="a" value="update">
						<div class="row">   		
							<h2>Edit baihat</h2>
						</div>
						<div class="row">   		
							<label>Ca si: </label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="casi_id">
                                <?php
                                foreach ($list_casi as $value)
                                {
                                    $casi = (array) $value;
                                    $id = $casi['id'];
                                    $casi_id = $baihat->casi_id;
                                    $name = $casi['ten'];
                                    if ($casi_id == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {
                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>  
							</select>
						</div>
						<div class="row">   		
							<label>Album:</label>
						</div>
						<div class="row">   	
							<select class="form-control p-2 m-2" name="album_id">
                                <?php
                                foreach ($list_album as $value)
                                {
                                    $album = (array) $value;
                                    $id = $album['id'];
                                    $album_id = $baihat->album_id;
                                    $name = $album['ten'];
                                    if ($album_id == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {
                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>  
							</select>
						</div>
						<div class="row">   		
							<label>The Loai:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="theloai_id">
                                <?php
                                foreach ($list_theloai as $value)
                                {
                                    $theloai = (array) $value;
                                    $id = $theloai['id'];
                                    $theloai_id = $baihat->theloai_id;
                                    $name = $theloai['ten'];
                                    if ($theloai_id == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {
                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>  
							</select>
						</div>
						<div class="row">   		
							<label>Tac Gia:</label>
						</div>
						<div class="row">
							<select class="form-control p-2 m-2" name="tacgia_id">
                                <?php
                                foreach ($list_tacgia as $value)
                                {
                                    $tacgia = (array) $value;
                                    $id = $tacgia['id'];
                                    $tacgia_id = $baihat->tacgia_id;
                                    $name = $tacgia['ten'];
                                    if ($tacgia_id == $id) {
                                        echo "<option value='$id' selected>$name
                                        </option>";
                                    }else {
                                        echo "<option value='$id'> $name
                                        </option>";
                                    }
                                }            
                                ?>
							</select>
						</div>
						<div class="row">   		
							<label>Ten Bai Hat:</label>
						</div>
						<div class="row">
								<input type="text" class="form-control p-2 m-2" name="ten" value="<?php echo $baihat->ten; ?>">
						</div>
						<div class="row">   		
							<label>Anh:</label>
						</div>
                        <div class="row">
                            <label class="btn btn-default btn-file">
                                Browse <input type="file" accept="image/*" name="anh" style="display: none;" onchange="loadFile(event)">
                                <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                                </script>
                            </label>
                            <img id="output" style="width: 300px; height: 200px;" src="<?php echo $baihat->anh; ?>"/>
						</div>
						<div class="row">   		
							<label>Loi Bai Hat:</label>
						</div>
						<div class="row">
								<input type="text" class="form-control p-2 m-2" name="loi_bai_hat" value="<?php echo $baihat->loi_bai_hat; ?>">
						</div>
						<div class="row">   		
							<label>Link:</label>
						</div>
						<div class="row">
								<input type="text" class="form-control p-2 m-2" name="link" value="<?php echo $baihat->link; ?>">
						</div>
						<div class="row">   
                            <button class="btn btn-primary p-2 m-2" type="submit" onclick="alert('Add success !')">Apply</button>                          
                            <button class="btn btn-primary p-2 m-2" type="submit" style="padding: 12px 0"><a href="admin.php?c=baihat" style="color: white; padding: 14px 30px;">Cancel</a></button>                          
					    </div>
					</form>
				</div>
			</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>