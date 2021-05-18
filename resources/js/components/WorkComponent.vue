<template>
    <v-card elevation="9" class="rounded-lg">
        <v-container>
            <v-list-item two-line>
                <v-list-item-content>
                    <v-list-item-title class="headline">
                        {{ work.name }}
                    </v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            <v-card-text>
                <v-icon small>{{ icons.mdiPencil }}</v-icon>
                {{ work.description }}
            </v-card-text>
            <v-card-actions>
                <v-btn
                    color="success"
                    text
                    :href="work.html_url"
                    target="_blank"
                    rel="noopener"
                >
                    <v-icon>{{ icons.mdiBook }}</v-icon
                    >Repo
                </v-btn>
                <v-spacer></v-spacer>
                <v-btn icon @click="show = !show">
                    <v-icon>
                        {{ show ? icons.mdiChevronUp : icons.mdiTag }}
                    </v-icon>
                </v-btn>
            </v-card-actions>
            <v-expand-transition>
                <div v-show="show">
                    <v-divider></v-divider>
                    <template v-for="topic in work.topics">
                        <v-chip small class="mx-1">{{ topic }}</v-chip>
                    </template>
                </div>
            </v-expand-transition>
        </v-container>
    </v-card>
</template>
<script>
import { mdiPencil, mdiBook, mdiChevronUp, mdiTag } from "@mdi/js";
export default {
    props: ["work"],
    data: () => ({
        icons: { mdiPencil, mdiBook, mdiChevronUp, mdiTag },
        show: false
    })
};
</script>
