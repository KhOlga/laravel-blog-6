<template>
    <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input">
</template>

<script>
export default {
    props: {
        code: { type: String },
    },

    data() {
        return {
            //coupon: 'FREEBIE',
            invalids: ['ALLFREE', 'SOMETHINGELSE']
        };
    },

    methods: {
        updateCode(code)
        {
            if(this.invalids.includes(code)) {
                alert('This coupon is no longer valid. Sorry!');
            }
            // TODO: validation
            this.$emit('input', code);
        }
    }
}
</script>
