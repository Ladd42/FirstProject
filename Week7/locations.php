<?PHP

// connect to your Azure server and select database (remember you connection details are all on the azure portal
$db = new mysqli(
    "us-cdbr-azure-southcentral-f.cloudapp.net",
    "b5051f6adfc120",
    "c31439e7",
    "webappalexander" );

// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
}


<?xml version="1.0" encoding="UTF-8"?>
<DirectionsResponse>
    <status>OK</status>
    <route>
        <summary>I-95 N and CT-15 N</summary>
        <leg>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7126526</lat>
                    <lng>-74.0065973</lng>
                </start_location>
                <end_location>
                    <lat>40.7130849</lat>
                    <lng>-74.0072188</lng>
                </end_location>
                <polyline>
                    <points>aunwFflubMy@fB[R</points>
                </polyline>
                <duration>
                    <value>9</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Head <b>northwest</b> on <b>Steve Flanders Square</b> toward <b>Broadway</b>/<b>Canyon of Heroes</b><div style="font-size:0.9em">Restricted usage road</div></html_instructions>
                <distance>
                    <value>73</value>
                    <text>240 ft</text>
                </distance>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7130849</lat>
                    <lng>-74.0072188</lng>
                </start_location>
                <end_location>
                    <lat>40.7114005</lat>
                    <lng>-74.0086398</lng>
                </end_location>
                <polyline>
                    <points>wwnwFbpubMdBtARN|AhAvBjB</points>
                </polyline>
                <duration>
                    <value>96</value>
                    <text>2 mins</text>
                </duration>
                <html_instructions>Turn <b>left</b> onto <b>Broadway</b></html_instructions>
                <distance>
                    <value>222</value>
                    <text>0.1 mi</text>
                </distance>
                <maneuver>turn-left</maneuver>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7114005</lat>
                    <lng>-74.0086398</lng>
                </start_location>
                <end_location>
                    <lat>40.7119752</lat>
                    <lng>-74.0058488</lng>
                </end_location>
                <polyline>
                    <points>gmnwF~xubMDc@@G?GAGAOOaAm@}Da@cCMq@Ik@</points>
                </polyline>
                <duration>
                    <value>54</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Turn <b>left</b> onto <b>Park Row</b></html_instructions>
                <distance>
                    <value>246</value>
                    <text>0.2 mi</text>
                </distance>
                <maneuver>turn-left</maneuver>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7119752</lat>
                    <lng>-74.0058488</lng>
                </start_location>
                <end_location>
                    <lat>40.7094901</lat>
                    <lng>-74.0016720</lng>
                </end_location>
                <polyline>
                    <points>{pnwFpgubM@K@CE{@?CAK?E?I@I@M?A@C@GBG@CVa@JKNWZi@Zi@\k@x@wAR_@HKn@}@p@aAbD{E</points>
                </polyline>
                <duration>
                    <value>112</value>
                    <text>2 mins</text>
                </duration>
                <html_instructions>Slight <b>right</b> onto <b>Frankfort St</b></html_instructions>
                <distance>
                    <value>463</value>
                    <text>0.3 mi</text>
                </distance>
                <maneuver>turn-slight-right</maneuver>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7094901</lat>
                    <lng>-74.0016720</lng>
                </start_location>
                <end_location>
                    <lat>40.7095586</lat>
                    <lng>-74.0015825</lng>
                </end_location>
                <polyline>
                    <points>ianwFlmtbMMQ</points>
                </polyline>
                <duration>
                    <value>25</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Turn <b>left</b> onto <b>Pearl St</b></html_instructions>
                <distance>
                    <value>11</value>
                    <text>36 ft</text>
                </distance>
                <maneuver>turn-left</maneuver>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7095586</lat>
                    <lng>-74.0015825</lng>
                </start_location>
                <end_location>
                    <lat>40.7093020</lat>
                    <lng>-73.9941819</lng>
                </end_location>
                <polyline>
                    <points>wanwFzltbM ...points truncated in this example</points>
                </polyline>
                <duration>
                    <value>60</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Take the <b>FDR Drive N</b> ramp</html_instructions>
                <distance>
                    <value>746</value>
                    <text>0.5 mi</text>
                </distance>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7093020</lat>
                    <lng>-73.9941819</lng>
                </start_location>
                <end_location>
                    <lat>40.7973977</lat>
                    <lng>-73.9291616</lng>
                </end_location>
                <polyline>
                    <points>c`nwFr~rbMCi@  ...points truncated in this example</points>
                </polyline>
                <duration>
                    <value>744</value>
                    <text>12 mins</text>
                </duration>
                <html_instructions>Merge onto <b>FDR Drive</b></html_instructions>
                <distance>
                    <value>12429</value>
                    <text>7.7 mi</text>
                </distance>
                <maneuver>merge</maneuver>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7973977</lat>
                    <lng>-73.9291616</lng>
                </start_location>
                <end_location>
                    <lat>40.8009073</lat>
                    <lng>-73.9292939</lng>
                </end_location>
                <polyline>
                    <points>wf_xFfhfbM}@ ...points truncated in this example</points>
                </polyline>
                <duration>
                    <value>45</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Take exit <b>17</b> on the <b>left</b> for <b>Toll Bridge</b> toward <b>I-278</b>/<b>Bruckner Expy</b>/<b>Grand Central Pkwy</b><div style="font-size:0.9em">Toll road</div></html_instructions>
                <distance>
                    <value>679</value>
                    <text>0.4 mi</text>
                </distance>
                <maneuver>ramp-left</maneuver>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.8009073</lat>
                    <lng>-73.9292939</lng>
                </start_location>
                <end_location>
                    <lat>40.7977328</lat>
                    <lng>-73.9224261</lng>
                </end_location>
                <polyline>
                    <points>u|_xF`ifbMnEkNh@  ...points truncated in this example</points>
                </polyline>
                <duration>
                    <value>66</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Continue onto <b>New York State Reference Rte 900G</b>/<b>Robert F. Kennedy Bridge</b><div style="font-size:0.9em">Partial toll road</div></html_instructions>
                <distance>
                    <value>679</value>
                    <text>0.4 mi</text>
                </distance>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7977328</lat>
                    <lng>-73.9224261</lng>
                </start_location>
                <end_location>
                    <lat>40.7978505</lat>
                    <lng>-73.9196151</lng>
                </end_location>
                <polyline>
                    <points>yh_xFd~dbMPo@  ...points truncated in this example</points>
                </polyline>
                <duration>
                    <value>38</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Take the <b>Interstate 278 E</b> exit on the <b>left</b> toward <b>Bronx</b>/<b>New England</b>/<b>Interstate 87 N</b>/<b>Upstate N Y</b></html_instructions>
                <distance>
                    <value>480</value>
                    <text>0.3 mi</text>
                </distance>
                <maneuver>ramp-left</maneuver>
            </step>
            <step>
                <travel_mode>DRIVING</travel_mode>
                <start_location>
                    <lat>40.7978505</lat>
                    <lng>-73.9196151</lng>
                </start_location>
                <end_location>
                    <lat>40.8017480</lat>
                    <lng>-73.9167993</lng>
                </end_location>
                <polyline>
                    <points>qi_xFrldbMAAIGA?_@WsBwAa@Wi@]i@]sCkBsCkBKGIGUOKGKGe@[g@[[S]Q</points>
                </polyline>
                <duration>
                    <value>32</value>
                    <text>1 min</text>
                </duration>
                <html_instructions>Merge onto <b>I-278 E</b><div style="font-size:0.9em">Partial toll road</div></html_instructions>
                <distance>
                    <value>494</value>
                    <text>0.3 mi</text>
                </distance>
                <maneuver>merge</maneuver>
            </step>

            ... Additional results truncated in this example[] ...

            <copyrights>Map data ©2015 Google</copyrights>
            <overview_polyline>
                <points>aunwFflubMdCuCl@  ...points truncated in this example</points>
            </overview_polyline>
            <waypoint_index>1</waypoint_index>
            <waypoint_index>0</waypoint_index>
            <bounds>
                <southwest>
                    <lat>40.7087115</lat>
                    <lng>-74.0065973</lng>
                </southwest>
                <northeast>
                    <lat>42.3610870</lat>
                    <lng>-71.0206956</lng>
                </northeast>
            </bounds>
    </route>
    <geocoded_waypoint>
        <geocoder_status>OK</geocoder_status>
        <type>locality</type>
        <type>political</type>
        <place_id>ChIJOwg_06VPwokRYv534QaPC8g</place_id>
    </geocoded_waypoint>
    <geocoded_waypoint>
        <geocoder_status>OK</geocoder_status>
        <type>locality</type>
        <type>political</type>
        <place_id>ChIJpVER8hFT5okRmVl96ahKjsw</place_id>
    </geocoded_waypoint>
    <geocoded_waypoint>
        <geocoder_status>OK</geocoder_status>
        <type>locality</type>
        <type>political</type>
        <place_id>ChIJXXN-Q-BE5IkRJ7azSE1832k</place_id>
    </geocoded_waypoint>
    <geocoded_waypoint>
        <geocoder_status>OK</geocoder_status>
        <type>locality</type>
        <type>political</type>
        <place_id>ChIJGzE9DS1l44kRoOhiASS_fHg</place_id>
    </geocoded_waypoint>
</DirectionsResponse>