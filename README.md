# Ustream for WordPress

A Wordpress plugin that enables the user to embed Ustream live and recorded embeds. Put the url for the ustream video you'd like between the embed tags.

    [embed]http://www.ustream.tv/recorded/98889950[/embed]
    [embed]http://www.ustream.tv/channel/iss-hdev-payload[/embed]

This really comes in handy when your blog is on a multi site WordPress instance where you are not allowed to add iframe code etc.

### Deprecated shortcode embed method

The deprecated method for embedding Ustream still works, but ignores all non-oEmbed info. One can add tags (short codes) on the format `[ustream cid="xxxxx"]` or `[ustream vid="xxxxx"]` in blog posts/pages and have them replaced by their video content from UStream.

This deprecated method uses short codes and automatically replaces the `[ustream cid="xxxxx"]` or `[ustream vid="xxxxx"]` tags with the embedded video related to the given cid or vid.

The `[ustream cid="xxxxx"]` tag is used when you want to stream a live broad cast and the `[ustream vid="xxxxx"]` is used when to publish a recorded video.
