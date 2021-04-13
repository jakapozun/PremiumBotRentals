<template>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1>Welcome!</h1>
                <h3>Search amongst the best sneaker bots available on market!</h3>
                <hr>
            </div>
            <div>
                <div class="col d-flex justify-content-between">
                    <div class="card" style="max-width: 20rem;">
                        <img class="card-img-top"
                             src="https://pbs.twimg.com/profile_images/1184203863269634048/P98ia02p_400x400.jpg"
                             alt="cybersole">
                        <div class="card-body">
                            <p class="text-muted">AIO bot</p>
                            <h5 class="card-title">Cybersole</h5>
                            <p class="card-text">The fastest AIO bot. Supporting over 170 retailers ranging from
                                Shopify to Supreme to Footsites.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem;">
                        <img class="card-img-top"
                             src="https://pbs.twimg.com/profile_images/1367472207748870186/cYCjQneP_400x400.jpg"
                             alt="tsb">
                        <div class="card-body">
                            <p class="text-muted">Sneaker Bot</p>
                            <h5 class="card-title">TSB</h5>
                            <p class="card-text">The Shit Bot is the only bot you need to cop Nike. Over 96%
                                success on 95 hyped releases.</p>
                        </div>
                    </div>

                    <div class="card" style="max-width: 20rem;">
                        <img class="card-img-top"
                             src="https://pbs.twimg.com/profile_images/1223442739834118144/WvvIilUp_400x400.png"
                             alt="dasheio">
                        <div class="card-body">
                            <p class="text-muted">AIO Bot</p>
                            <h5 class="card-title">DasheIO</h5>
                            <p class="card-text">Dashe is the greatest and fastest auto-checkout tool available
                                on the market. Supports Shopify, Supreme and more.</p>
                        </div>
                    </div>
                </div>

                <div class="col text-center mt-5">
                    <router-link to="/AllBots">
                        <button class="btn btn-lg btn-dark">Browse All...</button>
                    </router-link>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
