<template>
    <header>
        <nav>
            <router-link to="/">
                <button class="btn btn-info">Home</button>
            </router-link>
            <router-link to="/AllBots">
                <button class="btn btn-info">All Bots</button>
            </router-link>
            <router-link to="/MyRentals">
                <button class="btn btn-info">My Rentals</button>
            </router-link>
            <router-link to="/MyListings">
                <button class="btn btn-info">My Listings</button>
            </router-link>
            <router-link to="/Legal">
                <button class="btn btn-info">Legal</button>
            </router-link>
            <router-link to="/Settings">
                <button class="btn btn-info">Settings</button>
            </router-link>
        </nav>
    </header>
</template>

<script>
export default {
    name: "TheHeader"
}
</script>

<style scoped>
header{
    width: 100%;
    padding: 0.6rem;
    border-radius: 1rem;
    background-color: #2b4f60;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 0.5rem;
}
button{
    background: #98d7d4;
    margin-right: 1rem;
}
a:hover button,
a:active button,
a.active button{
    color: white;
    background-color: black;
}
</style>
