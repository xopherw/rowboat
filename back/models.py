from pydantic import BaseModel
from typing import Optional, List
from fastapi import Query

class User(BaseModel):
    first_name: str
    last_name: str 
    email: str 
    age: int
    gender: int


class UserResponse(BaseModel):
    first_name: str
