<template>
    <div class="wrapper-jscolor color_field" v-bind:class="{ 'wrapper-dropdown--error': !(/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(value)) }">
        <input
          :id="id"
          :name="id"
          class="form-control jscolor  {zIndex: 1055, hash:true,styleElement:'',onFineChange:'jsColorOnFineChange(this)'}"
          type="text"
          :aria-label="id" 
          aria-invalid="false"
          :value="value"
          @change="onChange($event.target)"
          @input="$emit('value', $event.target.value)"
          @focus="showColorPicker"
          @onFineChange="onFineChange"
          ref="color_field"
        />
        <span class="Color-Circle" ref="color_span" v-bind:style="{ backgroundColor: value }" @click="showColorPicker"></span>
    </div>
</template>

<script>
    export default {
        name: 'jscolor',
        data(){
            return {
                color: '#FFFFFF'
            }
        },
        props: [
            'value',
            'id'
        ],
        methods: {
            onChange(target){
              if(this.id=='bg_color'){
                $('head').append('<style>.spaktext:before{border-top :15px solid '+this.color+' !important;}</style>');
              }
                this.color = target.jscolor.toHEXString();
                this.$refs.color_span.style.backgroundColor = this.color;
                this.$emit('input', this.color);
            },
            onFineChange(e){
                this.color = '#' + e.detail.jscolor;
                this.$refs.color_span.style.backgroundColor = this.color;
                this.$emit('input', this.color);
            },
            showColorPicker(){
                this.$refs.color_field.jscolor.show();
            }
        },
        mounted: function () {
            this.$refs.color_span.style.backgroundColor = this.value;
        },
        updated: function () {
            this.$refs.color_span.style.backgroundColor = this.value;
        }
    }
    window.jsColorOnFineChange = function(thisObj){
        thisObj.valueElement.dispatchEvent(new CustomEvent("onFineChange", {detail: {jscolor: thisObj}}));
    }
</script>
<style>
.wrapper-jscolor{
      display: inline-flex;
}
.Color-Circle{
    width: 31px;
    height: 37px;
    position: absolute;
    float: right;
    right: 51px;
}
</style>