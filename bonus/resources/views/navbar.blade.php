
<style>
    ul{
        display: flex;
        list-style-type: none;
        justify-content: center;
    }

    li{
        margin-right: 2rem;
    }
</style>
<nav>
    <ul>
        <li>
            <a href="{{route('home')}}">Home</a>
        </li>
        <li>
            <a href="{{route('aboutUs')}}">About Us</a>
        </li>
        <li>
            <a href="{{route('contacts')}}">Contacts</a>
        </li>
    </ul>
</nav>