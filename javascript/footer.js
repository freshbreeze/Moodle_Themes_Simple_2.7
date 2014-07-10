function showHeader(){
YUI().use('node','stylesheet', function (Y) {
    new Y.StyleSheet("#show_header{display:none;} .notfrontpage #pageheader-top-left, .notfrontpage #pageheader-top-right, .notfrontpage #pageheader-middle-left { display:block !important; }");
});
}