from flask import Flask, render_template, request, redirect, url_for, jsonify
from werkzeug.utils import secure_filename
from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing import image
import numpy as np

app = Flask(_name_)

# Load your pre-trained model
model = load_model('mymodel.h5')

# Define allowed extensions for file uploads
ALLOWED_EXTENSIONS = {'png', 'jpg', 'jpeg', 'gif'}

def allowed_file(filename):
    return '.' in filename and filename.rsplit('.', 1)[1].lower() in ALLOWED_EXTENSIONS

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/classify', methods=['POST'])
def classify():
    if 'file' not in request.files:
        return redirect(request.url)

    file = request.files['file']

    if file.filename == '':
        return redirect(request.url)

    if file and allowed_file(file.filename):
        filename = secure_filename(file.filename)
        filepath = 'uploads/' + filename
        file.save(filepath)

        # Preprocess the image
        img = image.load_img(filepath, target_size=(224, 224))
        img_array = image.img_to_array(img)
        img_array = np.expand_dims(img_array, axis=0)
        img_array /= 255.0  # Normalize the image

        # Make predictions
        predictions = model.predict(img_array)

        # Get the predicted class
        class_index = np.argmax(predictions[0])

        # Replace this line with your own class labels
        class_labels = ['Class1', 'Class2', 'Class3']
        predicted_class = class_labels[class_index]

        results = {
            "predicted_class": predicted_class,
            "filename": filename
        }

        #return render_template('result.html', filename=filename, predicted_class=predicted_class)
        return jsonify(results)

    else:
        return 'Invalid file format'

if _name_ == '_main_':
    app.run(port=5000, debug=True)