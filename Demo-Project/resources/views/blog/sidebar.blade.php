<div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link mr-5" href="be_pages_generic_profile.html">
                        <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                    </a>
                    <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Search -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_pages_generic_search.html" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-10">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Search -->

            <!-- Mini Stats -->
            <div class="block pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                            <div class="font-size-h4">460</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                            <div class="font-size-h4">728</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                            <div class="font-size-h4">$7,860</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Mini Stats -->

            <!-- Friends -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="nav-users push">
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="assets/media/avatars/avatar2.jpg" alt="">
                                <i class="fa fa-circle text-success"></i> Sara Fields
                                <div class="font-w400 font-size-xs text-muted">Photographer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="assets/media/avatars/avatar13.jpg" alt="">
                                <i class="fa fa-circle text-success"></i> Jack Greene
                                <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="assets/media/avatars/avatar7.jpg" alt="">
                                <i class="fa fa-circle text-warning"></i> Carol Ray
                                <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                                <i class="fa fa-circle text-danger"></i> Ralph Murray
                                <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Friends -->

            <!-- Activity -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="list list-activity">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">+$29 New sale</div>
                            <div>
                                <a href="javascript:void(0)">Admin Template</a>
                            </div>
                            <div class="font-size-xs text-muted">5 min ago</div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project removed</div>
                            <div>
                                <a href="javascript:void(0)">Best Icon Set</a>
                            </div>
                            <div class="font-size-xs text-muted">26 min ago</div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-file-text-o"></i> Docs.doc
                                </a>
                            </div>
                            <div class="font-size-xs text-muted">3 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div>
                                <a href="javascript:void(0)">StudioWeb - View Profile</a>
                            </div>
                            <div class="font-size-xs text-muted">5 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">App v5.5 is available</div>
                            <div>
                                <a href="javascript:void(0)">Update now</a>
                            </div>
                            <div class="font-size-xs text-muted">8 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-user-follow text-pulse"></i>
                            <div class="font-w600">+1 Friend Request</div>
                            <div>
                                <a href="javascript:void(0)">Accept</a>
                            </div>
                            <div class="font-size-xs text-muted">1 day ago</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Activity -->

            <!-- Profile -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-name">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-alt-primary">
                                    <i class="fa fa-refresh mr-5"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Profile -->

            <!-- Settings -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Settings -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Helper classes

        Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

        Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
            - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
    -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">J. Smith</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li class="open">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                        <ul>
                            <li class="open">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                                <ul>
                                    <li>
                                        <a class="active" href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                                    </li>
                                    <li>
                                        <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                                    </li>
                                    <li>
                                        <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Hosting</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_hosting_dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_hosting_emails.html">Emails</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_hosting_account.html">Account</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_hosting_support.html">Support</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Real Estate</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_real_estate_dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_real_estate_listing.html">Listing</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_real_estate_listing_new.html">Add New Listing</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_crypto_dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_crypto_buy_sell.html">Buy/Sell</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_crypto_wallets.html">Wallets</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_crypto_settings.html">Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_ecom_dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_orders.html">Orders</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_order.html">Order</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_products.html">Products</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_product_edit.html">Product Edit</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_customer.html">Customer</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_elearning_courses.html">Courses</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_elearning_course.html">Course</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_elearning_lesson.html">Lesson</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_forum_categories.html">Categories</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_forum_topics.html">Topics</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_forum_discussion.html">Discussion</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Alternative Dashboards</span></a>
                                <ul>
                                    <li>
                                        <a href="db_classic.html"><span class="sidebar-mini-hide">Classic</span></a>
                                    </li>
                                    <li>
                                        <a href="db_clean.html"><span class="sidebar-mini-hide">Clean</span></a>
                                    </li>
                                    <li>
                                        <a href="db_social.html"><span class="sidebar-mini-hide">Social</span></a>
                                    </li>
                                    <li>
                                        <a href="db_corporate.html"><span class="sidebar-mini-hide">Corporate</span></a>
                                    </li>
                                    <li>
                                        <a href="db_minimal.html"><span class="sidebar-mini-hide">Minimal</span></a>
                                    </li>
                                    <li>
                                        <a href="db_pop.html"><span class="sidebar-mini-hide">Pop</span></a>
                                    </li>
                                    <li>
                                        <a href="db_dark.html"><span class="sidebar-mini-hide">Dark</span></a>
                                    </li>
                                    <li>
                                        <a href="db_medical.html"><span class="sidebar-mini-hide">Medical</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                                <ul>
                                    <li>
                                        <a href="bd_dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="bd_search.html">Search</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                        <ul>
                            <li>
                                <a href="be_blocks.html">Styles</a>
                            </li>
                            <li>
                                <a href="be_blocks_tiles.html">Tiles</a>
                            </li>
                            <li>
                                <a href="be_blocks_draggable.html">Draggable</a>
                            </li>
                            <li>
                                <a href="be_blocks_api.html">API</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Widgets</span></a>
                        <ul>
                            <li>
                                <a href="be_blocks_widgets_users.html">Users</a>
                            </li>
                            <li>
                                <a href="be_blocks_widgets_stats.html">Statistics</a>
                            </li>
                            <li>
                                <a href="be_blocks_widgets_media.html">Media</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                        <ul>
                            <li>
                                <a href="be_ui_grid.html">Grid</a>
                            </li>
                            <li>
                                <a href="be_ui_icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="be_ui_typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="be_ui_activity.html">Activity</a>
                            </li>
                            <li>
                                <a href="be_ui_buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="be_ui_navigation.html">Navigation</a>
                            </li>
                            <li>
                                <a href="be_ui_tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="be_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                            </li>
                            <li>
                                <a href="be_ui_images.html">Images</a>
                            </li>
                            <li>
                                <a href="be_ui_animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="be_ui_ribbons.html">Ribbons</a>
                            </li>
                            <li>
                                <a href="be_ui_timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="be_ui_accordion.html">Accordion</a>
                            </li>
                            <li>
                                <a href="be_ui_color_themes.html">Color Themes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                        <ul>
                            <li>
                                <a href="be_tables_styles.html">Styles</a>
                            </li>
                            <li>
                                <a href="be_tables_responsive.html">Responsive</a>
                            </li>
                            <li>
                                <a href="be_tables_helpers.html">Helpers</a>
                            </li>
                            <li>
                                <a href="be_tables_pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="be_tables_datatables.html">DataTables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                        <ul>
                            <li>
                                <a href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                            </li>
                            <li>
                                <a href="be_forms_elements_material.html">Material Elements</a>
                            </li>
                            <li>
                                <a href="be_forms_css_inputs.html">CSS Inputs</a>
                            </li>
                            <li>
                                <a href="be_forms_plugins.html">Plugins</a>
                            </li>
                            <li>
                                <a href="be_forms_editors.html">Editors</a>
                            </li>
                            <li>
                                <a href="be_forms_validation.html">Validation</a>
                            </li>
                            <li>
                                <a href="be_forms_wizard.html">Wizard</a>
                            </li>
                            <li>
                                <a href="be_forms_premade.html">Pre-made</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                        <ul>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_default.html">Default</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_flipped.html">Flipped</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_header_modern.html">Modern</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_classic.html">Classic</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_glass.html">Glass</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_header_fixed_modern.html">Modern</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_classic.html">Classic</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_glass.html">Glass</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_sidebar_mini.html">Mini</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_side_overlay_visible.html">Visible</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_side_overlay_no_page_overlay.html">No Page Overlay</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_content_boxed.html">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_content_narrow.html">Narrow</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_content_full_width.html">Full Width</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_hero_color.html">Color</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_hero_bubbles.html">Bubbles</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_hero_image.html">Image</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_hero_video.html">Video</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="be_layout_api.html">API</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                        <ul>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                                <ul>
                                    <li>
                                        <a href="#">Link 1-1</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 1-2</a>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                        <ul>
                                            <li>
                                                <a href="#">Link 2-1</a>
                                            </li>
                                            <li>
                                                <a href="#">Link 2-2</a>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Link 3-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Link 3-2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                                <ul>
                                    <li>
                                        <a href="be_comp_chat_multiple.html">Multiple</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_chat_single.html">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="be_comp_charts.html">Charts</a>
                            </li>
                            <li>
                                <a href="be_comp_nestable.html">Nestable</a>
                            </li>
                            <li>
                                <a href="be_comp_gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="be_comp_sliders.html">Sliders</a>
                            </li>
                            <li>
                                <a href="be_comp_scrolling.html">Scrolling</a>
                            </li>
                            <li>
                                <a href="be_comp_rating.html">Rating</a>
                            </li>
                            <li>
                                <a href="be_comp_filtering.html">Filtering</a>
                            </li>
                            <li>
                                <a href="be_comp_appear.html">Appear</a>
                            </li>
                            <li>
                                <a href="be_comp_countto.html">CountTo</a>
                            </li>
                            <li>
                                <a href="be_comp_calendar.html">Calendar</a>
                            </li>
                            <li>
                                <a href="be_comp_image_cropper.html">Image Cropper</a>
                            </li>
                            <li>
                                <a href="be_comp_maps_google.html">Google Maps</a>
                            </li>
                            <li>
                                <a href="be_comp_maps_vector.html">Vector Maps</a>
                            </li>
                            <li>
                                <a href="be_comp_syntax_highlighting.html">Syntax Highlighting</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                        <ul>
                            <li>
                                <a href="be_pages_generic_blank.html">Blank</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_blank_block.html">Blank (Block)</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_blank_breadcrumb.html">Blank (Breadcrumb)</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_scrumboard.html">Scrum Board</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_search.html">Search</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_story.html">Story</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_project_list.html">Project List</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_project.html">Project</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_upgrade_plan.html">Upgrade Plan</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_team.html">Team</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_todo.html">Todo</a>
                            </li>
                            <li>
                                <a href="op_coming_soon.html">Coming Soon</a>
                            </li>
                            <li>
                                <a href="op_maintenance.html">Maintenance</a>
                            </li>
                            <li>
                                <a href="op_status.html">Status</a>
                            </li>
                            <li>
                                <a href="op_installation.html">Installation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                        <ul>
                            <li>
                                <a href="be_pages_auth_all.html">All</a>
                            </li>
                            <li>
                                <a href="op_auth_signin.html">Sign In</a>
                            </li>
                            <li>
                                <a href="op_auth_signin2.html">Sign In 2</a>
                            </li>
                            <li>
                                <a href="op_auth_signin3.html">Sign In 3</a>
                            </li>
                            <li>
                                <a href="op_auth_signup.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="op_auth_signup2.html">Sign Up 2</a>
                            </li>
                            <li>
                                <a href="op_auth_signup3.html">Sign Up 3</a>
                            </li>
                            <li>
                                <a href="op_auth_lock.html">Lock Screen</a>
                            </li>
                            <li>
                                <a href="op_auth_lock2.html">Lock Screen 2</a>
                            </li>
                            <li>
                                <a href="op_auth_lock3.html">Lock Screen 3</a>
                            </li>
                            <li>
                                <a href="op_auth_reminder.html">Pass Reminder</a>
                            </li>
                            <li>
                                <a href="op_auth_reminder2.html">Pass Reminder 2</a>
                            </li>
                            <li>
                                <a href="op_auth_reminder3.html">Pass Reminder 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                        <ul>
                            <li>
                                <a href="be_pages_error_all.html">All</a>
                            </li>
                            <li>
                                <a href="op_error_400.html">400</a>
                            </li>
                            <li>
                                <a href="op_error_401.html">401</a>
                            </li>
                            <li>
                                <a href="op_error_403.html">403</a>
                            </li>
                            <li>
                                <a href="op_error_404.html">404</a>
                            </li>
                            <li>
                                <a href="op_error_500.html">500</a>
                            </li>
                            <li>
                                <a href="op_error_503.html">503</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>