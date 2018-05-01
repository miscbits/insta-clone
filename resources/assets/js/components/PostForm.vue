<template>
    <div class="container">
        <div class="large-12 medium-12 small-12 cell">
            <form enctype="multipart/form-data">
                <label>File
                    <input type="file" id="file" ref="file" name="file" v-on:change="handleFileUpload()"/>
                </label>

                <label for="body">Description</label>
                <textarea name="body" v-model="body"></textarea>

                <button v-on:click="submitPost()">Submit</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                file: null,
                body: null,
            };
        },

        methods: {
            submitPost() {
                event.preventDefault();
                let formData = new FormData();
                formData.append('file', this.file);
                formData.append('body', this.body);

                axios.post('/api/posts', 
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                ).then(function(){
                    window.location.replace('/home');
                })
                .catch(function(){
                    console.log('FAILURE!!');
                });
            },

            handleFileUpload(){
                this.file = this.$refs.file.files[0];
            }
        }
    }
</script>
