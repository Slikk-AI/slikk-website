<style>
        @media(max-width:999px){
            nav{
  background: #fff;
}
nav:after{
  content: '';
  clear: both;
  display: table;
}
nav .logo{
  float: left;
  color: white;
  /* font-size: 27px;
  font-weight: 600;
  line-height: 70px; */
  padding-left: 60px;
}
nav ul{
  float: right;
  margin-right: 40px;
  list-style: none;
  position: relative;
}
nav ul li{
  float: left;
  display: inline-block;
  background: #fff;
  margin: 0 5px;
}
nav ul li a{
  /* color: #71147e; */
  /* line-height: 70px; */
  text-decoration: none;
  /* font-size: 18px; */
  padding: 8px 15px;
  color: #26262b;
    font-size: .875em;
    font-weight: 500;
}
nav ul li a:hover{
  color: #71147e;
  border-radius: 5px;
  box-shadow:  0 0 5px #71147e,
               0 0 10px #71147e;
}
nav ul ul li a:hover{
  box-shadow: none;
}
nav ul ul{
  position: absolute;
  top: 90px;
  border-top: 3px solid #71147e;
  opacity: 0;
  visibility: hidden;
  transition: top .3s;
}
nav ul ul ul{
  border-top: none;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
}
nav ul ul li{
  position: relative;
  margin: 0px;
  width: 150px;
  float: none;
  display: list-item;
  border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
  line-height: 50px;
}
nav ul ul ul li{
  position: relative;
  top: -60px;
  left: 150px;
}
.show,.icon,input{
  display: none;
}
.fa-plus{
  font-size: 15px;
  margin-left: 40px;
}
nav ul{
    margin-right: 0px;
    float: left;
  }
  nav .logo{
    padding-left: 30px;
    width: 100%;
  }
  .show + a, ul{
    display: none;
  }
  nav ul li,nav ul ul li{
    display: block;
    width: 100%;
  }
  nav ul li a:hover{
    box-shadow: none;
  }
  .show{
    display: block;
    color: #71147e;
    /* font-size: 18px; */
    padding: 0 20px;
    /* line-height: 70px; */
    cursor: pointer;
    color: #26262b;
    font-size: .875em;
    font-weight: 500;
  }
  .show:hover{
    color: #71147e;
  }
  .icon{
    display: block;
    color: #71147e;
    position: absolute;
    top: 30px;
    right: 40;
    line-height: 70px;
    cursor: pointer;
    font-size: 25px;
  }
  nav ul ul{
    top: 70px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
  }
  nav ul ul a{
    padding-left: 40px;
  }
  nav ul ul ul a{
    padding-left: 80px;
  }
  nav ul ul ul li{
    position: static;
  }
  [id^=btn]:checked + ul{
    display: block;
  }
  nav ul ul li{
    border-bottom: 0px;
  }
  span.cancel:before{
    content: '\f00d';
  }
  .header-menu{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            z-index: 999;
            padding: 1rem;
            box-shadow: 0 6px 3px -6px rgb(17 17 17 / 5%);
        }
        .logo-img{
            width: 100px;
            /* height: 2.5rem; */
        }
        .ul-bg{
            border-radius: 4px;
            box-shadow: 0 1px 4px 2px rgba(17, 17, 17, .05);
            margin-left:3rem;
            margin-top: 2rem;
        }
        .grid_li_m{
            display:flex;
            margin-left: -2rem;
        }
        .ul-bg li{
            padding: 0.3rem;
        }
        .megamenu__link a{
            margin-left:-2rem;
        }
        .menu_icon img{
            height: 25px;
        }
        .main-ul-m{
            height: 500px;
            overflow: scroll;
        }
        }
    </style>
    <header class="header-menu display-desktop">
        <nav>
        <div class="logo" style="padding-left: 12rem;">
            <a href="index.php" aria-current="page" class="nav_brand-link w-nav-brand w--current" aria-label="home">
            <img src="https://hub.slikk.ai/assets/frontend/image/Slikk-Logo-Blue.png" class="logo-img"
                loading="lazy" alt="Slikk Logo" class="logo nav_brand-image" />
            </a>
        </div>
        <label for="btn" class="icon">
            <span class="fa fa-bars" style="color: #71147e;"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul class="main-ul-m">
            <li style="margin-top: 3rem;margin-bottom: 1rem;">
                <label for="btn-1" class="show">Products</label>
                <a href="#">Products</a>
                <input type="checkbox" id="btn-1">
                <ul class="ul-bg">
                    <li style="color: #999;font-weight: 700;margin-left: -2rem;">Features</li>
                    <li class="grid_li_m">
                    <div class="menu_icon">
                        <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1731.png')}}" alt="">
                    </div>
                    <div class="megamenu__link">
                        <a href="360-degree-visibility.php">360° Visibility</a>
                    </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1730.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="time-management.php">Time Management</a>
                        </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1729.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="task-management.php">Task Management</a>
                            </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1728.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="goal-management.php">Goal Management</a>
                            </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1727.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="kanban-boards.php">Kanban Boards</a>
                            </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1726.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="gantt-charts.php">Gantt Charts</a>
                            </div>
                    </li>
                    <li class="grid_li_m">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1725.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="file-sharing.php">File Sharing</a>
                                </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1732.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="reporting-and-analytics.php">Reporting & Analytics</a>
                                </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1731.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="nudge-cards.php">Nudge Cards</a>
                            </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1727.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="schedule-meeting.php">Schedule Meeting</a>
                            </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1726.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="import.php">Import</a>
                            </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1728.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="docs.php">Docs</a>
                                </div>
                    </li>
                    <li style="color: #999;font-weight: 700;margin-left: -2rem;">Use Cases</li>
                    <li class="grid_li_m" style="">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1737.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="project-management.php">Project Management</a>
                                </div>
                    </li>
                    <li class="grid_li_m" style="">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1738.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="software-development.php">Software Development</a>
                            </div>
                    </li>
                    <li class="grid_li_m" style="">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1739.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="sales.php">Sales</a>
                                </div>
                    </li>
                    <li class="grid_li_m" style="">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1740.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="startup.php">Startup</a>
                                </div>
                    </li>
                    <li class="grid_li_m" style="">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1737.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="remote-work.php">Remote Work</a>
                                </div>
                    </li>
                    <li class="grid_li_m" style="">
                                <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1738.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="marketing.php">Marketing</a>
                                </div>
                    </li>
                    <li class="grid_li_m" style="">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1739.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="design.php">Design</a>
                                </div>
                    </li>
                    <li class="grid_li_m" style="">
                            <div class="menu_icon">
                                    <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1740.png')}}" alt="">
                                </div>
                                <div class="megamenu__link">
                                    <a href="hr.php">HR</a>
                                </div>
                    </li>
                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Learn</label>
                <a href="#">Learn</a>
                <input type="checkbox" id="btn-2">
            <ul class="ul-bg">
                    <li class="grid_li_m">
                        <div class="menu_icon">
                            <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1716.png')}}" alt="">
                        </div>
                        <div class="megamenu__link">
                            <a href="blog.php">Blog</a>
                        </div>
                    </li>
                    <li class="grid_li_m">
                            <div class="menu_icon">
                                      <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1717.png')}}" alt="">
                                  </div>
                                  <div class="megamenu__link">
                                    <a href="video.php">Video</a>
                                </div>
                    </li>
                    <li class="grid_li_m">
                        <div class="menu_icon">
                                      <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1718.png')}}" alt="">
                                  </div>
                                  <div class="megamenu__link">
                                    <a href="#">Support Article</a>
                                  </div>
                    </li>
                    <li class="grid_li_m">
                            <div class="menu_icon">
                                      <img src="{{ url('https://hub.slikk.ai/assets/frontend/image/Group 1719.png')}}" alt="">
                                  </div>
                                  <div class="megamenu__link">
                                    <a href="#">Help</a>
                                  </div>
                    </li>
            </ul>
            </li>
            <li><a href="pricing.php" style="line-height: 3rem;margin-left: 0.2rem;">Pricing</a></li>
            <!-- <li><a href="#" style="line-height: 1rem;margin-left: 0.2rem;">Sign in</a></li> -->
            <a href="https://app.slikk.ai/" class="button w-button" style="transition: .2s;color: #fff;font-size: 1em;line-height: 1.3;font-weight: 500;text-align: center;font-family: Axiforma, Arial, serif;border-radius: 150px;background-color: #71147e;display: inline-block;padding: 0.75rem 7.5rem;-webkit-box-pack: center;-webkit-box-align: center;text-decoration: none;cursor: pointer;margin-left: 1rem;margin-top: 2rem;">Start for free</a>
        </ul>
        </nav>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>
