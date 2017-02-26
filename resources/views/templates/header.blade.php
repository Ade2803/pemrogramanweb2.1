<header>
		<h3>CRUD Operation</h3>
	</header>
	<nav>
		<ul>
			<li><b>MENU</b></li><br>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li><br>
			<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
		</ul>
	</nav>