from flask import Flask, render_template, request, redirect, jsonify
from pymongo import MongoClient

app = Flask(__name__)

# Connect to MongoDB
client = MongoClient('mongodb://localhost:27017/')
db = client['taskmaster']

@app.route('/')
def index():
    tasks = db.tasks.find()
    return render_template('index.html', tasks=tasks)

@app.route('/addTask', methods=['POST'])
def add_task():
    try:
        title = request.form['title']
        description = request.form['description']
        deadline = request.form['deadline']
        priority = request.form['priority']
        user_id = request.form['userId']

        new_task = {
            'title': title,
            'description': description,
            'deadline': deadline,
            'priority': priority,
            'completionStatus': False,
            'userId': user_id,
        }

        db.tasks.insert_one(new_task)
        return redirect('/')
    except Exception as e:
        print("Exception:", e)
        return jsonify({"error": str(e)})

if __name__ == "__main__":
    app.run(debug=True)
