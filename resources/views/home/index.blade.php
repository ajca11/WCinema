<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        More
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li>
            <form method="POST" action="/logout" style="display: inline;">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
        </li>
    </ul>
</div> 