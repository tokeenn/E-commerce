@include ('layouts.default')
    <div class="connected_message">
                        You are logged in !
                            <style>
                                    .connected_message{
                                                color: white;
                                                        }
                                                            </style>
                                                                </div>
                                                                    <a class="logout_button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
