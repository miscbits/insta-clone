<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-for="post in posts" class="col-md-8">
                <post-card 
                    v-bind:key="post.id"
                    v-bind:post="post"
                ></post-card>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: [],
                nextPage: 1
            };
        },

        created: function () {
            this.getPosts();
        },

        methods: {
            /**
             * Get all of the authorized tokens for the user.
             */
            getPosts() {
                axios.get('/api/posts', {params: {page: this.nextPage}})
                        .then(response => {
                            console.log(response.data.data)
                            this.posts.push(...response.data.data);
                            this.nextPage += 1;
                        });
            }
        }

    }
</script>
