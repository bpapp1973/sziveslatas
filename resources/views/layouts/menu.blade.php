<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}">Kezdőlap</a>
</li>
<li >
	<ul>Személyes
   		<li class="{{ Request::is('home*') ? 'active' : '' }}">
   			<a href="{!! url('/users/'.Auth::user()->id.'/edit') !!}">Felhasználó</a>
   		</li>
   </ul>
</li>
