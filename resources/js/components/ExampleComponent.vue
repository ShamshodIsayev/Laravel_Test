<template>
    <div id="app contact m-auto">
        <div class="container">
            <h3 class=" for-bottom main_title">Contact</h3>
            <div class="row col-7 m-auto">
                <form action="">
                    <div class="forms">
                        <label class="label" for="email">Email</label>
                        <input
                            class="for-bottom"
                            type="email"
                            name=""
                            id="email"
                        />
                        <label class="label" for="text">Some text</label>
                        <textarea
                            class="for-bottom"
                            name=""
                            id="text"
                            cols="30"
                            rows="10"
                        ></textarea>
                        <button
                            class="btn-success btn m-auto for-bottom"
                            type="submit"
                        >
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>

<style scoped>
.forms {
    display: flex;
    flex-direction: column;
    margin: auto;
}

.for-bottom {
    margin-bottom: 15px !important;
}

.m-auto {
    margin: auto;
    display: block;
}

.label {
    color: #00a85a;
}

.main_title {
    display: block;
    text-align: center;
    margin-top: 45px;
}

.btn {
    width: 150px;
}
</style>
