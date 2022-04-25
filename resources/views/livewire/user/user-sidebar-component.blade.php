<div class="edit--profile-area">
    <ul class="edit--profile-links list-unstyled mb-0">
        <li><a href="/user/profile" class="{{ (request()->is('user/profile*')) ? 'active' : '' }}">Edit Profile</a></li>
        <li><a href="/user/social-profile" class="{{ (request()->is('user/social-profile*')) ? 'active' : '' }}">Social Profiles</a></li>
        <li><a href="/user/my-properties" class="{{ (request()->is('user/my-propertie*')) ? 'active' : '' }}">My Properties</a></li>
        <li><a href="/user/favourite-properties" class="{{ (request()->is('user/favourite-properties*')) ? 'active' : '' }}">Favorite Properties</a></li>
        <li><a href="/user/add-property" class="{{ (request()->is('user/add-property*')) ? 'active' : '' }}">Add Property</a></li>
    </ul>
</div>