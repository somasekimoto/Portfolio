let routes = [];
let paths = ["careers"];
const snakeToCamel = (str) =>
    (str.charAt(0).toUpperCase() + str.substring(1)).replace(
        /([-_/][a-z])/g,
        (group) =>
            group
                .toUpperCase()
                .replace("-", "")
                .replace("_", "")
                .replace("/", "")
        // snakeToCamel('my-snake-string'); // MySnakeString
    );
for (let path of paths) {
    let component = Vue.component(snakeToCamel(path) + "Component");
    component = component;
    routes.push({
        path: "/" + path,
        name: path,
        component: component,
    });
}

routes.push({
    path: "*",
    name: "home",
    component: Vue.component("HomeComponent"),
})

module.exports = routes;
