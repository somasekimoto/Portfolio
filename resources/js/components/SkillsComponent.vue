<template>
    <v-container class="text-center py-16 my-16">
        <h1>
            <v-icon large class="mx-2">{{ icons.mdiArmFlex }}</v-icon>
            Skills
        </h1>
        <div style="height: 50px;">
            <v-divider class="my-8" horizontal></v-divider>
        </div>
        <v-row>
            <template v-for="skill in skills">
                <v-col sm="6" md="4" lg="3">
                    <skill-component :skill="skill"></skill-component>
                </v-col>
            </template>
        </v-row>
    </v-container>
</template>
<script>
import { mdiArmFlex } from "@mdi/js";
export default {
    data: () => ({
        icons: { mdiArmFlex },
        skills: [
            {
                name: "Php",
                details: ["Laravel"],
                experience: 12,
                level: 3
            },
            {
                name: "Javascript",
                details: ["Vue.js", "jQuery", "etc."],
                experience: 15,
                level: 2
            },
            {
                name: "Python",
                details: ["batch processing", "etc."],
                experience: 12,
                level: 1.5
            },
            {
                name: "AWS",
                details: [
                    "Lambda",
                    "APIGateway",
                    "S3",
                    "CloudFront",
                    "RDS",
                    "Serverless Framework",
                    "etc."
                ],
                experience: 12,
                level: 2
            },
            {
                name: "Google Apps Script",
                details: ["Spreadsheet Service", "etc."],
                experience: 12,
                level: 1.5
            },
            {
                name: "Ruby",
                details: ["Ruby on rails"],
                experience: 4,
                level: 1.5
            }
        ]
    })
};
</script>
