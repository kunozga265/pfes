import Vue from 'vue';

Vue.mixin({
    methods: {
        fileUrl: function (path) {
            return this.$page.props.publicPath + path
        },
        title(food){
            if(food.serving_size > 1)
                return this.decimalToFraction(food.serving_size).display +" "+food.serving_unit+"(s)"
            else
                return this.decimalToFraction(food.serving_size).display +" "+food.serving_unit
        },
        gcd(a, b) {
            return (b) ? this.gcd(b, a % b) : a;
        },
        decimalToFraction (decimal) {
            let thirdFactor=0.33333333333333
            let whole_number=parseInt(decimal)
            let _decimal=decimal-whole_number


            //if decimal is a whole number
            if (decimal == whole_number) {
                return {
                    top: whole_number,
                    bottom: 1,
                    //display: parseInt(_decimal) + '/' + 1
                    display: whole_number
                };

            }
            //It is either 1/3 or 2/3
            else if(Number.isInteger(_decimal/thirdFactor)){

                if(whole_number>0){
                    //_decimal=_decimal/whole_number
                    return {
                        display: whole_number + " " + _decimal/thirdFactor +"/"+3
                    }
                }else{
                    return {
                        display: _decimal/thirdFactor +"/"+3
                    }
                }
            }
            else {
                var top = _decimal.toString().includes(".") ? _decimal.toString().replace(/\d+[.]/, '') : 0;
                var bottom = Math.pow(10, top.toString().replace('-','').length);
                if (_decimal >= 1) {
                    top = +top + (Math.floor(_decimal) * bottom);
                }
                else if (_decimal <= -1) {
                    top = +top + (Math.ceil(_decimal) * bottom);
                }

                var x = Math.abs(this.gcd(top, bottom));

                if(whole_number>0) {
                    return {
                        top: (top / x),
                        bottom: (bottom / x),
                        display: whole_number + " " + (top / x) + '/' + (bottom / x)
                    };
                }else{
                    return {
                        top: (top / x),
                        bottom: (bottom / x),
                        display: (top / x) + '/' + (bottom / x)
                    };
                }
            }
        }

    }
})
