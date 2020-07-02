pipeline {
  agent any
  stages {
    stage('Stage 1') {
      steps {
        echo 'hello world'

        // POST
        def post = new URL("https://pipedream.com/sources/dc_mXuNZZ").openConnection();
        def message = '{"message":"this is a message"}'
        post.setRequestMethod("POST")
        post.setDoOutput(true)
        post.setRequestProperty("Content-Type", "application/json")
        post.getOutputStream().write(message.getBytes("UTF-8"));
        def postRC = post.getResponseCode();
        println(postRC);
        if(postRC.equals(200)) {
            println(post.getInputStream().getText());
        }

      }
    }

  }
}