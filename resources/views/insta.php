<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Posts Viewer</title>
    <style>
        #posts-container {
            display: flex;
            flex-wrap: wrap;
        }

        .post {
            width: 300px;
            margin: 10px;
        }

        .post img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Instagram Posts Viewer</h1>
    <label for="instagramId">Enter Instagram ID:</label>
    <input type="text" id="instagramId">
    <button onclick="getInstagramPosts()">Get Posts</button>

    <div id="posts-container"></div>

    <script>
        async function getInstagramPosts() {
            const instagramId = document.getElementById('instagramId').value;
            const accessToken = 'IGQWRORHM3TmJqeVFzcVN6eVFiNnBpRFVwWEhfcmtKekVGUl9OTXBuTXZADcFo4MVd1OU4zREYzTTBBbUczb193WjJWTHFvS1hQWmx3SmthRUVRTDludGg0eGVnVGpvU0dha2VuTnVGZAHFjOGNGNU52MEw2dVhBOFkZD'; // Replace with your actual access token

            const response = await fetch(`https://graph.instagram.com/v12.0/${instagramId}/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink,timestamp&access_token=${accessToken}`);
            const data = await response.json();

            const postsContainer = document.getElementById('posts-container');
            postsContainer.innerHTML = '';

            if (data.data && data.data.length > 0) {
                data.data.forEach(post => {
                    const postElement = document.createElement('div');
                    postElement.classList.add('post');

                    if (post.media_type === 'IMAGE' || post.media_type === 'CAROUSEL_ALBUM') {
                        const imgElement = document.createElement('img');
                        imgElement.src = post.media_url;
                        postElement.appendChild(imgElement);
                    }

                    const captionElement = document.createElement('p');
                    captionElement.textContent = post.caption || 'No caption';
                    postElement.appendChild(captionElement);

                    postsContainer.appendChild(postElement);
                });
            } else {
                postsContainer.innerHTML = '<p>No posts found for this Instagram ID.</p>';
            }
        }
    </script>
</body>
</html>
