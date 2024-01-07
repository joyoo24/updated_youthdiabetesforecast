<!DOCTYPE html>
<html>
<head>
    <title>Model Descriptions</title>
    <!-- CSS references -->
    <link href="Content/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS references -->
    <script src="Scripts/jquery-3.5.1.slim.min.js"></script>
    <script src="Scripts/popper.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Diabetes Information Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="youth_master_site.php">Youth Diabetes Portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="women_master_site.php">Women Diabetes Portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
    </ul>
  </div>
</nav>

<main>
    <br/>
    <div class="container">
        <div class="row">
			<div sytle="align-items: center;">
			<h1>Diabetes Risk Prediction Model Description</h1>
            </div>
			
            <section class="col-md-4">
                <div class="card h-100">
						<div class="card-header">
						<h5 class="card-title">Training Data</h5>

						</div>
                    <div class="card-body">
						<img src="img/modeling_data.png" style="max-height: 200px; margin: 0 auto;" alt="Training Data">
                        <p class="card-text">
						
						The dataset used for training the diabetes prediction model is sourced from 'diabetes.csv', which is a part of a comprehensive collection of patient data. This data contains various features that are pertinent to diabetes prediction. Before feeding it to the model, the dataset is divided into training and test sets. The training data assists the model in learning and recognizing patterns, while the test data is used to evaluate the model's accuracy. To ensure the model processes the most accurate information, the features in the dataset are normalized to a standard scale. The primary sources of this data include:
						<br/>
							<li><a href="https://www.niddk.nih.gov/">National Institute of Diabetes and Digestive and Kidney Diseases</a></li>

							<li><a href="https://www.cdc.gov/nchs/nhanes/index.htm">National Health and Nutrition Examination Survey (NHANES)</a></li>

						</p>
                    </div>


                </div>
            </section>

            <!-- Model Structure Card -->
            <section class="col-md-4">
                <div class="card h-100">
					<div class="card-header">
                        <h5 class="card-title">Model Structure</h5>
					</div>
                    <div class="card-body">

                    <img src="img/ann.jpg"  style="max-height: 190px; margin: 0 auto;" alt="Model Structure">
                        <p class="card-text">The backbone of our diabetes prediction tool is a neural network designed using TensorFlow's Keras library. This network comprises three layers:

						<li>The first layer has 12 neurons and takes in 8 input features, using a ReLU activation function.</li>
						<li>The subsequent layer has 8 neurons, again activated by ReLU.</li>
						<li>The final layer has a single neuron with a sigmoid activation function to predict the probability of diabetes.
						Once the structure is defined, the model is compiled using a binary cross-entropy loss function, optimized with the Adam optimizer. This structure ensures that the model can process the input features efficiently and produce a reliable prediction.</li>
						</p>
                    </div>

                    <!--<div class="card-footer">
                        <a href="model_structure_info.php" class="btn btn-primary">More on Model Structure</a>
                    </div>-->
                </div>
            </section>

            <!-- Resulting Statistics Card -->
            <section class="col-md-4">
                <div class="card h-100">
					<div class="card-header">
                        <h5 class="card-title">Resulting Statistics</h5>
					</div>
					 <img src="img/stats.jpg" style="max-height: 200px; margin: 0 auto;" alt="Resulting Statistics">
 
                    <div class="card-body">

                        <p class="card-text">To ensure our model's reliability, we validate it using the reserved test data. During the training phase, the model's accuracy is continually checked against this test data, allowing us to see how well it performs on data it hasn't seen before. Additionally, to understand the relationships between different features, a heatmap is generated, showcasing the correlation between each feature. But that's not all – we also employ a RandomForest classifier to discern the importance of each feature in the prediction process. This not only helps in model refinement but also gives users insight into which factors majorly contribute to diabetes risk.
						<br/>
						As a result, our diabetes forecasting model has demonstrated a reasonable performance, achieving an accuracy rate of 82% on average. This accuracy rate ensures that the predictions made by the model are acceptable for assessing diabetes risk.
						</p>
                    
					
					</div>

                </div>
            </section>

        </div>
    </div>
    <br/>
</main>

</body>
</html>
