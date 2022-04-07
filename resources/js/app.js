require("./bootstrap");
import vueCounter from "./vueCounter";
import { createApp } from "vue";

createApp({
    setup() {
        const {counter} = vueCounter()

        return {
            counter
        }
    }
}).mount('#counter')
