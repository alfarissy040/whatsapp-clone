require("./bootstrap");

import Alpine from "alpinejs";
// window.Alpine = Alpine;

Alpine.store("chatPanel", {
    on: false,
    chat: {
        title: "",
        status: "",
        messages: {},
    },

    chatOn(data) {
        this.chat.title = data.title;
        this.chat.status = data.status;
        this.on = true;
    },
});

Alpine.start();
