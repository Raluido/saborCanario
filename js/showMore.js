$(".showMore a").on("click", function () {
    var $this = $(this);
    var $content = $this.parent().prev("div.content");
    var linkText = $this.text().toUpperCase();
    if (linkText === "SABER MÁS") {
        linkText = "Saber menos";
        $content.switchClass("hideContent", "showContent", 400);
    } else {
        linkText = "Saber más";
        $content.switchClass("showContent", "hideContent", 400);
    };

    $this.text(linkText);
});