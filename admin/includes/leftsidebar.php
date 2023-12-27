            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>

                            </li>
                            <?php if ($_SESSION['utype'] == '1') : ?>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Sub-admins </span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="add-subadmins.php">Add Sub-admin</a></li>
                                        <li><a href="manage-subadmins.php">Manage Sub-admin</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>



                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Kategori </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-category.php">Add Kategori</a></li>
                                    <li><a href="manage-categories.php">Manage Kategori</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Tag </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php">Add Tag</a></li>
                                    <li><a href="manage-subcategories.php">Manage Tag</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts (Berita) </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php">Add Postingan</a></li>
                                    <li><a href="manage-posts.php">Manage Postingan</a></li>
                                    <li><a href="trash-posts.php">Trash Postingan</a></li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php">Tentang Kami</a></li>
                                    <li><a href="contactus.php">kontak</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Komentar </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="unapprove-comment.php">Waiting for Approval </a></li>
                                    <li><a href="manage-comments.php">Approved Comments</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>



                </div>
                <!-- Sidebar -left -->

            </div>